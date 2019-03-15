<?php
/**
 * Reference Fixture
 */
class ReferenceFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_references';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fr_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'an_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_secteur' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'usercreated' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modify' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'usermodify' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fr_name' => 'Lorem ipsum dolor sit amet',
			'an_name' => 'Lorem ipsum dolor sit amet',
			'id_secteur' => 1,
			'created' => '2017-05-12 10:42:22',
			'usercreated' => 1,
			'modify' => '2017-05-12 10:42:22',
			'usermodify' => 1,
			'photo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
