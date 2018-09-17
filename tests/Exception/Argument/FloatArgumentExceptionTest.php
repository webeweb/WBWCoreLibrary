<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Argument;

use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;

/**
 * Float argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Argument
 * @final
 */
final class FloatArgumentExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new FloatArgumentException("exception");

        $res = "The argument \"exception\" is not a float";
        $this->assertEquals($res, $ex->getMessage());
    }

}
