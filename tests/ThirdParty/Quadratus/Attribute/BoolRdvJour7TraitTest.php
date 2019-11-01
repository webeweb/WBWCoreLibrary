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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRdvJour7Trait;

/**
 * R d v jour7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRdvJour7TraitTest extends AbstractTestCase {

    /**
     * Tests the setRdvJour7() method.
     *
     * @return void
     */
    public function testSetRdvJour7() {

        $obj = new TestBoolRdvJour7Trait();

        $obj->setRdvJour7(true);
        $this->assertEquals(true, $obj->getRdvJour7());
    }
}
