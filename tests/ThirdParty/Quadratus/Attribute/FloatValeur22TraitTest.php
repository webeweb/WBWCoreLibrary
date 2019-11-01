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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatValeur22Trait;

/**
 * Valeur22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatValeur22TraitTest extends AbstractTestCase {

    /**
     * Tests the setValeur22() method.
     *
     * @return void
     */
    public function testSetValeur22() {

        $obj = new TestFloatValeur22Trait();

        $obj->setValeur22(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur22());
    }
}
