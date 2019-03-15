<?php
App::uses('Adherperiode', 'Model');

/**
 * Adherperiode Test Case
 */
class AdherperiodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adherperiode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adherperiode = ClassRegistry::init('Adherperiode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adherperiode);

		parent::tearDown();
	}

}
