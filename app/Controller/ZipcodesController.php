<?php
App::uses('AppController', 'Controller');
/**
 * Zipcodes Controller
 *
 * @property Zipcode $Zipcode
 * @property PaginatorComponent $Paginator
 */
class ZipcodesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zipcode->recursive = 0;
		$this->set('zipcodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
		$this->set('zipcode', $this->Zipcode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zipcode->create();
			if ($this->Zipcode->save($this->request->data)) {
				$this->Flash->success(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The zipcode could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zipcode->save($this->request->data)) {
				$this->Flash->success(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The zipcode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
			$this->request->data = $this->Zipcode->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zipcode->delete($id)) {
			$this->Flash->success(__('The zipcode has been deleted.'));
		} else {
			$this->Flash->error(__('The zipcode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
