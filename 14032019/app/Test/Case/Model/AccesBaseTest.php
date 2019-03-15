<?php
App::uses('AccesBase', 'Model');

/**
 * AccesBase Test Case
 */
class AccesBaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acces_base'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccesBase = ClassRegistry::init('AccesBase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccesBase);

		parent::tearDown();
	}

}
