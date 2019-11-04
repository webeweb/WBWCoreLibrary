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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen2Trait;

/**
 * Booleen2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen2() method.
     *
     * @return void
     */
    public function testSetBooleen2() {

        $obj = new TestBoolBooleen2Trait();

        $obj->setBooleen2(true);
        $this->assertEquals(true, $obj->getBooleen2());
    }
}