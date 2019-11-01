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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeChantier1Trait;

/**
 * Code prime chantier1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeChantier1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeChantier1() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier1() {

        $obj = new TestStringCodePrimeChantier1Trait();

        $obj->setCodePrimeChantier1("codePrimeChantier1");
        $this->assertEquals("codePrimeChantier1", $obj->getCodePrimeChantier1());
    }
}
