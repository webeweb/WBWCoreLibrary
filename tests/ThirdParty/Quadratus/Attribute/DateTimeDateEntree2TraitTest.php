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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateEntree2Trait;

/**
 * Date entree2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateEntree2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateEntree2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree2() {

        // Set a Date/time mock.
        $dateEntree2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateEntree2Trait();

        $obj->setDateEntree2($dateEntree2);
        $this->assertSame($dateEntree2, $obj->getDateEntree2());
    }
}