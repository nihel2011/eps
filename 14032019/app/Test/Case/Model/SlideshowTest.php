<?php
App::uses('Slideshow', 'Model');

/**
 * Slideshow Test Case
 */
class SlideshowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.slideshow'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Slideshow = ClassRegistry::init('Slideshow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Slideshow);

		parent::tearDown();
	}

}
