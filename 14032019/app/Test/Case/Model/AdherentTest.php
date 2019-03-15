<?php
App::uses('Adherent', 'Model');

/**
 * Adherent Test Case
 */
class AdherentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adherent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adherent = ClassRegistry::init('Adherent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adherent);

		parent::tearDown();
	}

}
