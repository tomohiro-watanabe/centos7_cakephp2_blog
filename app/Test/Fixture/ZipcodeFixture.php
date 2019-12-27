<?php
/**
 * Zipcode Fixture
 */
class ZipcodeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'jiscode' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zipcode_old' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zipcode' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pref_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'street_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pref' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'street' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flag1' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'flag2' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'flag3' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'flag4' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'flag5' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'flag6' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'zipcode' => array('column' => 'zipcode', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'jiscode' => 'Lorem ipsum dolor sit amet',
			'zipcode_old' => 'Lorem ipsum dolor sit amet',
			'zipcode' => 'Lorem ipsum dolor sit amet',
			'pref_kana' => 'Lorem ipsum dolor sit amet',
			'city_kana' => 'Lorem ipsum dolor sit amet',
			'street_kana' => 'Lorem ipsum dolor sit amet',
			'pref' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'street' => 'Lorem ipsum dolor sit amet',
			'flag1' => 1,
			'flag2' => 1,
			'flag3' => 1,
			'flag4' => 1,
			'flag5' => 1,
			'flag6' => 1
		),
	);

}
