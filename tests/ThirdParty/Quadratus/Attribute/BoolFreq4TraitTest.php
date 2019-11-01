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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFreq4Trait;

/**
 * Freq4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFreq4TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq4() method.
     *
     * @return void
     */
    public function testSetFreq4() {

        $obj = new TestBoolFreq4Trait();

        $obj->setFreq4(true);
        $this->assertEquals(true, $obj->getFreq4());
    }
}
