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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate4Trait;

/**
 * Date4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate4() {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate4Trait();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }
}
