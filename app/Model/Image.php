<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Post $Post
 */
class Image extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $actsAs = array(
		'Upload.Upload' => array(
		'photo' => array(
			'fields' => array(
				'dir' => 'photo_dir'
			),
		'thumbnailSizes' => array(
			'thumb' => '500mw',
		),
		'thumbnailMethod' => 'php',
		),
	),
	);

	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id'
		)
	);
}
