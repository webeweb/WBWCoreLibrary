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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBoolean3Trait;

/**
 * Boolean3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBoolean3TraitTest extends AbstractTestCase {

    /**
     * Tests the setBoolean3() method.
     *
     * @return void
     */
    public function testSetBoolean3() {

        $obj = new TestBoolBoolean3Trait();

        $obj->setBoolean3(true);
        $this->assertEquals(true, $obj->getBoolean3());
    }
}
