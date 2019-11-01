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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatValeur41Trait;

/**
 * Valeur41 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatValeur41TraitTest extends AbstractTestCase {

    /**
     * Tests the setValeur41() method.
     *
     * @return void
     */
    public function testSetValeur41() {

        $obj = new TestFloatValeur41Trait();

        $obj->setValeur41(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur41());
    }
}
