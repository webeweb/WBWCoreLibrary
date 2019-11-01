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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTrsSuiviCaMensTrait;

/**
 * T r s suivi c a mens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTrsSuiviCaMensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsSuiviCaMens() method.
     *
     * @return void
     */
    public function testSetTrsSuiviCaMens() {

        $obj = new TestBoolTrsSuiviCaMensTrait();

        $obj->setTrsSuiviCaMens(true);
        $this->assertEquals(true, $obj->getTrsSuiviCaMens());
    }
}
