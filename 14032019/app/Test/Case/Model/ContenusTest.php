<?php
App::uses('Contenus', 'Model');

/**
 * Contenus Test Case
 */
class ContenusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contenus',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contenus = ClassRegistry::init('Contenus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contenus);

		parent::tearDown();
	}

}
