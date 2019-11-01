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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz3510BaseTrait;

/**
 * Az3510 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz3510BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz3510Base() method.
     *
     * @return void
     */
    public function testSetAz3510Base() {

        $obj = new TestFloatAz3510BaseTrait();

        $obj->setAz3510Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510Base());
    }
}
