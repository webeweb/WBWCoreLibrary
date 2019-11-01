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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse3Trait;

/**
 * Niv rupt classe3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse3() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse3() {

        $obj = new TestStringNivRuptClasse3Trait();

        $obj->setNivRuptClasse3("nivRuptClasse3");
        $this->assertEquals("nivRuptClasse3", $obj->getNivRuptClasse3());
    }
}
