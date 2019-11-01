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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumAntHSupTrait;

/**
 * Cum ant h sup trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumAntHSupTraitTest extends AbstractTestCase {

    /**
     * Tests the setCumAntHSup() method.
     *
     * @return void
     */
    public function testSetCumAntHSup() {

        $obj = new TestFloatCumAntHSupTrait();

        $obj->setCumAntHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumAntHSup());
    }
}
