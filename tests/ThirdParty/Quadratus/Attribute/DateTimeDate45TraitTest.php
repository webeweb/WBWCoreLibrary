<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate45Trait;

/**
 * Date45 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate45TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate45() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate45() {

        // Set a Date/time mock.
        $date45 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate45Trait();

        $obj->setDate45($date45);
        $this->assertSame($date45, $obj->getDate45());
    }
}
