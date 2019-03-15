<?php
App::uses('Activite', 'Model');

/**
 * Activite Test Case
 */
class ActiviteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activite'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Activite = ClassRegistry::init('Activite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activite);

		parent::tearDown();
	}

}
