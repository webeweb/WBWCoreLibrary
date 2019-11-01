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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc9Trait;

/**
 * Champs critere ent piece a c9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc9TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc9() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc9() {

        $obj = new TestStringChampsCritereEntPieceAc9Trait();

        $obj->setChampsCritereEntPieceAc9("champsCritereEntPieceAc9");
        $this->assertEquals("champsCritereEntPieceAc9", $obj->getChampsCritereEntPieceAc9());
    }
}
