<?php
App::uses('Infosite', 'Model');

/**
 * Infosite Test Case
 */
class InfositeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.infosite'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Infosite = ClassRegistry::init('Infosite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Infosite);

		parent::tearDown();
	}

}
