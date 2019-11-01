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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteChargeIndemCpTrait;

/**
 * Compte charge indem cp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteChargeIndemCpTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteChargeIndemCp() method.
     *
     * @return void
     */
    public function testSetCompteChargeIndemCp() {

        $obj = new TestStringCompteChargeIndemCpTrait();

        $obj->setCompteChargeIndemCp("compteChargeIndemCp");
        $this->assertEquals("compteChargeIndemCp", $obj->getCompteChargeIndemCp());
    }
}
