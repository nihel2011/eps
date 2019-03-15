<?php
App::uses('Souscatalogue', 'Model');

/**
 * Souscatalogue Test Case
 */
class SouscatalogueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.souscatalogue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Souscatalogue = ClassRegistry::init('Souscatalogue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Souscatalogue);

		parent::tearDown();
	}

}
