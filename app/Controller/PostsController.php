<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {
    public $name = 'Posts';
    public $uses = array('Post', 'Category', 'Tag', 'PostsTag', 'Image');
    public $components = array('Search.Prg',);
    public $helpers = array('Html', 'Form');
    // 検索対象のフィールド設定  
    public $presetVars = true;
    

    public function index() {
        // debug($this->Post->find('all'));
        $this->Prg->commonProcess();
        $this->paginate = array(
            'conditions'=>array(
                $this->Post->parseCriteria($this->passedArgs),
            ),
            'limit'=>3,
            'order' => array('Post.id' => 'asc'),
        );
        $this->set('posts',$this->paginate(''),);

        $this->Post->recursive = 0;

        $categoryRadio = $this->Post->Category->find('list', array('fields' => array('id', 'category')));
        $this->set('categoryRadio', $categoryRadio);

        $tagRadio = $this->Post->Tag->find('list', array('fields' => array('id', 'tag')));
        $this->set('tagRadio', $tagRadio);
    }

    public function view($id = null) {
        // debug($this->Post->find('all'));
       

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);

    }

    public function add() {
        // debug($this->Post->find('all'));
       

        if ($this->request->is('post')) {
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->saveAll($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
            }

            $this->set('categories',$this->Category->find('list',
            array('fields'=>array('id','category'))));

            $this->set('tags',$this->Tag->find('list',
            array('fields'=>array('id','tag'))));
            
        }

    public function edit($id = null) {
    
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        $this->set('categories',$this->Category->find('list',
            array('fields'=>array('id','category'))));

        $this->set('tags',$this->Tag->find('list',
            array('fields'=>array('id','tag'))));
    
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
    
        if ($this->Post->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
    
        return $this->redirect(array('action' => 'index'));
    }

    public function isAuthorized($user) {
        // 登録済ユーザーは投稿できる
        if ($this->action === 'add') {
            return true;
        }
    
        // 投稿のオーナーは編集や削除ができる
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }
    
        return parent::isAuthorized($user);
    }
}
