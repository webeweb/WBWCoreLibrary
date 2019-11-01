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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen10Trait;

/**
 * Booleen10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen10TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen10() method.
     *
     * @return void
     */
    public function testSetBooleen10() {

        $obj = new TestBoolBooleen10Trait();

        $obj->setBooleen10(true);
        $this->assertEquals(true, $obj->getBooleen10());
    }
}
