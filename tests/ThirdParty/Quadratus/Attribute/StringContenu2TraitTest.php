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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringContenu2Trait;

/**
 * Contenu2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringContenu2TraitTest extends AbstractTestCase {

    /**
     * Tests the setContenu2() method.
     *
     * @return void
     */
    public function testSetContenu2() {

        $obj = new TestStringContenu2Trait();

        $obj->setContenu2("contenu2");
        $this->assertEquals("contenu2", $obj->getContenu2());
    }
}
