<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\DirectoryUtility;

/**
 * Directory utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class DirectoryUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the isEmpty() method.
	 *
	 * @return void
	 */
	public function testIsEmpty() {

		$this->assertEquals(null, DirectoryUtility::isEmpty("exception"));
		$this->assertEquals(false, DirectoryUtility::isEmpty(getcwd()));
	}

}
