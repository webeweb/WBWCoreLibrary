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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraRib3Trait;

/**
 * T v a t l r a rib3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraRib3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraRib3() method.
     *
     * @return void
     */
    public function testSetTvatlraRib3() {

        $obj = new TestStringTvatlraRib3Trait();

        $obj->setTvatlraRib3("tvatlraRib3");
        $this->assertEquals("tvatlraRib3", $obj->getTvatlraRib3());
    }
}
