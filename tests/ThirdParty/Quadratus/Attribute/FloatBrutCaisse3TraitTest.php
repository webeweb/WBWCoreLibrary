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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBrutCaisse3Trait;

/**
 * Brut caisse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBrutCaisse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetBrutCaisse3() {

        $obj = new TestFloatBrutCaisse3Trait();

        $obj->setBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse3());
    }
}