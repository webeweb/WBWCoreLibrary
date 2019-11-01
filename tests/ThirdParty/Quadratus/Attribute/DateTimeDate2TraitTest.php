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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate2Trait;

/**
 * Date2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2() {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate2Trait();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }
}
