<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
    public $order = array('Post.id ASC');
    public $name = 'Post';
    public $actsAs = array('Search.Searchable','Containable');
    public $filterArgs = array(   
                array('name' => 'title', 'type' => 'like', 'field' => 'Post.title'),  
                array('name' => 'category', 'type' => 'like', 'field' => 'Category.id'), 
                array('name' => 'tag_id', 'type' => 'like', 'field' => 'Tag.0.id')
    );
          
    
    public $hasAndBelongsToMany = array(
        'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'posts_tags',
            'foreignKey' => 'post_id',
            'associationForeignKey' => 'tag_id',
            'with' => 'PostsTag',
        )
        );
    
    public $belongsTo = array(
        'Category' => array(
                'className' => 'Category',
                'foreignKey' => 'category_id'
        )
        );
    
    public $hasMany = array(
        'Image' => array(
                'className' => 'Image',
                'foreignKey' => 'post_id'
        )    
        );

    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}
?>
