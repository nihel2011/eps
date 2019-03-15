<?php
App::uses('Tarif', 'Model');

/**
 * Tarif Test Case
 */
class TarifTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tarif',
		'app.service',
		'app.i18n_model'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tarif = ClassRegistry::init('Tarif');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tarif);

		parent::tearDown();
	}

}
