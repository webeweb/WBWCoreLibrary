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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong9Trait;

/**
 * Long9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong9() method.
     *
     * @return void
     */
    public function testSetLong9() {

        $obj = new TestIntLong9Trait();

        $obj->setLong9(10);
        $this->assertEquals(10, $obj->getLong9());
    }
}