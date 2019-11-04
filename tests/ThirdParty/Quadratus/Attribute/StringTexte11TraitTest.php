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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte11Trait;

/**
 * Texte11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte11TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte11() method.
     *
     * @return void
     */
    public function testSetTexte11() {

        $obj = new TestStringTexte11Trait();

        $obj->setTexte11("texte11");
        $this->assertEquals("texte11", $obj->getTexte11());
    }
}