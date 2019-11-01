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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz3910Trait;

/**
 * Az3910 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz3910TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz3910() method.
     *
     * @return void
     */
    public function testSetAz3910() {

        $obj = new TestFloatAz3910Trait();

        $obj->setAz3910(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3910());
    }
}
