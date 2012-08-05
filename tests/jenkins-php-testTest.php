<?php
/**
 * PHP Unit Test test
 *
 * PHP version 5.3
 *
 * @category  OfficeL
 * @package   Officel
 * @author    Y.Nishimura <nishimuray@gmail.com>
 * @copyright 2012 - Office L
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @link      http://github.com/officel/jenkins-php-test.git
 */
/**
 * PHP　Unit Test test 1st test
 *
 * this is test now.
 *
 * @category  OfficeL
 * @package   Officel
 * @author    Y.Nishimura <nishimuray@gmail.com>
 * @copyright 2012 - Office L
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @link      http://github.com/officel/jenkins-php-test.git
 */
class JenkinsPhpTestTest extends PHPUnit_Framework_TestCase
{


	/**
	 * test 1st 
	 *
	 * @return none
	 */
	public function testPushAndPop() {
		$stack = array();
		$this->assertEquals(0, count($stack));
 
		array_push($stack, 'foo');
		$this->assertEquals('foo', $stack[count($stack) - 1]);
		$this->assertEquals(1, count($stack));
 
		$this->assertEquals('foo', array_pop($stack));
		$this->assertEquals(0, count($stack));
	}


}

