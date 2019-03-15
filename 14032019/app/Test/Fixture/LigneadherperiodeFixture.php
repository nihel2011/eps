<?php
/**
 * Ligneadherperiode Fixture
 */
class LigneadherperiodeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_ligneadherperiodes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'adherents_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'adherperiodes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'orderm' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'usercreated' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modify' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'usermodify' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'adherents_id' => 1,
			'adherperiodes_id' => 1,
			'orderm' => 1,
			'created' => '2018-10-16 15:32:49',
			'usercreated' => 1,
			'modify' => '2018-10-16 15:32:49',
			'usermodify' => 1
		),
	);

}
