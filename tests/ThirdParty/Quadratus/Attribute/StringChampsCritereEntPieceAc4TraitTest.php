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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc4Trait;

/**
 * Champs critere ent piece a c4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc4TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc4() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc4() {

        $obj = new TestStringChampsCritereEntPieceAc4Trait();

        $obj->setChampsCritereEntPieceAc4("champsCritereEntPieceAc4");
        $this->assertEquals("champsCritereEntPieceAc4", $obj->getChampsCritereEntPieceAc4());
    }
}