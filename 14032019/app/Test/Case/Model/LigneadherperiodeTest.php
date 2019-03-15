<?php
App::uses('Ligneadherperiode', 'Model');

/**
 * Ligneadherperiode Test Case
 */
class LigneadherperiodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ligneadherperiode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ligneadherperiode = ClassRegistry::init('Ligneadherperiode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ligneadherperiode);

		parent::tearDown();
	}

}
