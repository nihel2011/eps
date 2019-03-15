<?php
App::uses('ImageContenus', 'Model');

/**
 * ImageContenus Test Case
 */
class ImageContenusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.image_contenus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImageContenus = ClassRegistry::init('ImageContenus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImageContenus);

		parent::tearDown();
	}

}
