<?php
/**
 * Actualite Fixture
 */
class ActualiteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_actualites';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fr_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fr_resume' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fr_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'menu_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'orderm' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'position' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'datea' => array('type' => 'date', 'null' => false, 'default' => null),
		'photo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'fr_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fr_resume' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fr_name' => 'Lorem ipsum dolor sit amet',
			'menu_id' => 1,
			'orderm' => 1,
			'position' => 1,
			'datea' => '2017-05-04',
			'photo' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2017-05-04 23:13:34',
			'usercreated' => 1,
			'modify' => '2017-05-04 23:13:34',
			'usermodify' => 1
		),
	);

}
