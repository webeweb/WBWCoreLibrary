<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Pointer;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Null pointer exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Pointer
 * @final
 */
final class NullPointerExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new NullPointerException("exception");

        $res = "exception";
        $this->assertEquals($res, $ex->getMessage());
    }

}