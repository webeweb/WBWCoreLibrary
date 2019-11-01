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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone9Trait;

/**
 * Zone9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone9TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone9() method.
     *
     * @return void
     */
    public function testSetZone9() {

        $obj = new TestStringZone9Trait();

        $obj->setZone9("zone9");
        $this->assertEquals("zone9", $obj->getZone9());
    }
}
