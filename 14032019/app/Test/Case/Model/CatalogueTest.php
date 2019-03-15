<?php
App::uses('Catalogue', 'Model');

/**
 * Catalogue Test Case
 */
class CatalogueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.catalogue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Catalogue = ClassRegistry::init('Catalogue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Catalogue);

		parent::tearDown();
	}

}
