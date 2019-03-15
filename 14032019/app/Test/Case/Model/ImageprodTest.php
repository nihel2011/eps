<?php
App::uses('Imageprod', 'Model');

/**
 * Imageprod Test Case
 */
class ImageprodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imageprod',
		'app.produit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imageprod = ClassRegistry::init('Imageprod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imageprod);

		parent::tearDown();
	}

}
