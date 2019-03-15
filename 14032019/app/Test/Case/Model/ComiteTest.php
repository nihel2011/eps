<?php
App::uses('Comite', 'Model');

/**
 * Comite Test Case
 */
class ComiteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comite'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comite = ClassRegistry::init('Comite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comite);

		parent::tearDown();
	}

}
