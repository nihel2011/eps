<?php
/**
 * Subvention Fixture
 */
class SubventionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_subventions';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'titre' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datesub' => array('type' => 'date', 'null' => false, 'default' => null),
		'montant' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'donneur' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'titre' => 'Lorem ipsum dolor sit amet',
			'datesub' => '2018-10-23',
			'montant' => '',
			'donneur' => 'Lorem ipsum dolor sit amet',
			'created' => '2018-10-23 15:37:27',
			'usercreated' => 1,
			'modify' => '2018-10-23 15:37:27',
			'usermodify' => 1
		),
	);

}
