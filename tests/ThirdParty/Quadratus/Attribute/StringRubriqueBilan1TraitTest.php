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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRubriqueBilan1Trait;

/**
 * Rubrique bilan1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRubriqueBilan1TraitTest extends AbstractTestCase {

    /**
     * Tests the setRubriqueBilan1() method.
     *
     * @return void
     */
    public function testSetRubriqueBilan1() {

        $obj = new TestStringRubriqueBilan1Trait();

        $obj->setRubriqueBilan1("rubriqueBilan1");
        $this->assertEquals("rubriqueBilan1", $obj->getRubriqueBilan1());
    }
}
