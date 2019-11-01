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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNoLotInterets2Trait;

/**
 * No lot interets2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNoLotInterets2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNoLotInterets2() method.
     *
     * @return void
     */
    public function testSetNoLotInterets2() {

        $obj = new TestIntNoLotInterets2Trait();

        $obj->setNoLotInterets2(10);
        $this->assertEquals(10, $obj->getNoLotInterets2());
    }
}
