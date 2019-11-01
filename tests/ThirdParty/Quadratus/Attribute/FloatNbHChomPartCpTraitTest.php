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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHChomPartCpTrait;

/**
 * Nb h chom part c p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHChomPartCpTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHChomPartCp() method.
     *
     * @return void
     */
    public function testSetNbHChomPartCp() {

        $obj = new TestFloatNbHChomPartCpTrait();

        $obj->setNbHChomPartCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartCp());
    }
}
