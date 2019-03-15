<?php
App::uses('Subvention', 'Model');

/**
 * Subvention Test Case
 */
class SubventionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subvention'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subvention = ClassRegistry::init('Subvention');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subvention);

		parent::tearDown();
	}

}
