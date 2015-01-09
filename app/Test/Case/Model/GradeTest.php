<?php
App::uses('Grade', 'Model');

/**
 * Grade Test Case
 *
 */
class GradeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grade = ClassRegistry::init('Grade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grade);

		parent::tearDown();
	}

}
