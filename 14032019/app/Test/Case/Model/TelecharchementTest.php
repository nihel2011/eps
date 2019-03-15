<?php
App::uses('Telecharchement', 'Model');

/**
 * Telecharchement Test Case
 */
class TelecharchementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.telecharchement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Telecharchement = ClassRegistry::init('Telecharchement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Telecharchement);

		parent::tearDown();
	}

}
