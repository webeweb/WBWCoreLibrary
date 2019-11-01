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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontant24Trait;

/**
 * Montant24 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontant24TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontant24() method.
     *
     * @return void
     */
    public function testSetMontant24() {

        $obj = new TestIntMontant24Trait();

        $obj->setMontant24(10);
        $this->assertEquals(10, $obj->getMontant24());
    }
}
