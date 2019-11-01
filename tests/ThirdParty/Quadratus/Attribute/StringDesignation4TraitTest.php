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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDesignation4Trait;

/**
 * Designation4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDesignation4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDesignation4() method.
     *
     * @return void
     */
    public function testSetDesignation4() {

        $obj = new TestStringDesignation4Trait();

        $obj->setDesignation4("designation4");
        $this->assertEquals("designation4", $obj->getDesignation4());
    }
}
