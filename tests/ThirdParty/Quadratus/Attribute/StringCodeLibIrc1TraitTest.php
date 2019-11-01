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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibIrc1Trait;

/**
 * Code lib i r c1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibIrc1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibIrc1() method.
     *
     * @return void
     */
    public function testSetCodeLibIrc1() {

        $obj = new TestStringCodeLibIrc1Trait();

        $obj->setCodeLibIrc1("codeLibIrc1");
        $this->assertEquals("codeLibIrc1", $obj->getCodeLibIrc1());
    }
}
