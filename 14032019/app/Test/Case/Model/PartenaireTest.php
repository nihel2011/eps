<?php
App::uses('Partenaire', 'Model');

/**
 * Partenaire Test Case
 */
class PartenaireTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.partenaire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Partenaire = ClassRegistry::init('Partenaire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Partenaire);

		parent::tearDown();
	}

}
