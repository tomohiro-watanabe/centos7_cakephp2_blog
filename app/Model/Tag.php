<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Post $Post
 */
class Tag extends AppModel {

	public $hasAndBelongsToMany = array(
	'Post' => array(
		'className' => 'Post',
		'joinTable' => 'posts_tags',
		'foreignKey' => 'tag_id',
		'associationForeignKey' => 'post_id',
		'with' => 'PostsTag',
	)
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */


}
