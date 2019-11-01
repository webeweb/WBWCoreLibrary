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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte24Trait;

/**
 * Texte24 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte24TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte24() method.
     *
     * @return void
     */
    public function testSetTexte24() {

        $obj = new TestStringTexte24Trait();

        $obj->setTexte24("texte24");
        $this->assertEquals("texte24", $obj->getTexte24());
    }
}
