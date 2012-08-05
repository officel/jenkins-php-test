<?php
/**
 * コメントテスト
 *
 * 後でファイル名変えると思う。
 * Docコメントのテスト中
 * <pre>
 * メモ：
 * ・PHPのバージョン表記
 * ・カテゴリ、パッケージには順序がある
 * ・ライセンス、リンクには順序がある
 * ・authorは名前とメールアドレスが必須
 * ・カテゴリ、パッケージは先頭大文字
 * </pre>
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
 * works
 *
 * this is work
 *
 * @category  OfficeL
 * @package   Officel
 * @author    Y.Nishimura <nishimuray@gmail.com>
 * @copyright 2012 - Office L
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @link      http://github.com/officel/jenkins-php-test.git
 */
class Test
{


	/**
	 * test function
	 *
	 * @return none
	 */
	public function Test_No001() {
		echo __CLASS__ , ':' , __FUNCTION__ , PHP_EOL;
		for ($i = 0;$i<10;$i++){
			echo '.';
		}
		echo 'done';
	}


	/**
	 * test function
	 *
	 * @return none
	 */
	public function Test_No002() {
		echo __CLASS__ , ':' , __FUNCTION__ , PHP_EOL;
		for ($i = 0;$i<10;$i++){
			echo '.';
		}
		echo 'done';
	}


}

$test = new Test();

$test->Test_No001();
$test->Test_No002();
