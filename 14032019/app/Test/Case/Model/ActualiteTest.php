<?php
App::uses('Actualite', 'Model');

/**
 * Actualite Test Case
 */
class ActualiteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actualite',
		'app.menu',
		'app.contenus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actualite = ClassRegistry::init('Actualite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actualite);

		parent::tearDown();
	}

}
