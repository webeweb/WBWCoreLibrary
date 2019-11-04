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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds61Trait;

/**
 * T d s61 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds61TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds61() method.
     *
     * @return void
     */
    public function testSetTds61() {

        $obj = new TestStringTds61Trait();

        $obj->setTds61("tds61");
        $this->assertEquals("tds61", $obj->getTds61());
    }
}