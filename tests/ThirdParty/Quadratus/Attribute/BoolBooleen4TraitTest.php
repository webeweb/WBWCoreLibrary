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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen4Trait;

/**
 * Booleen4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen4TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen4() method.
     *
     * @return void
     */
    public function testSetBooleen4() {

        $obj = new TestBoolBooleen4Trait();

        $obj->setBooleen4(true);
        $this->assertEquals(true, $obj->getBooleen4());
    }
}
