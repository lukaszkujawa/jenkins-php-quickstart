<?php

require APPLICATION_PATH . '/Example.php';

class ExampleTest extends PHPUnit_Framework_TestCase {
	
	public function testSomething() {
		$example = new Example();
		$this->assertEquals($example->foo(), 'bar');
	}
	
}