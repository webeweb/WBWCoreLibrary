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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringContenu4Trait;

/**
 * Contenu4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringContenu4TraitTest extends AbstractTestCase {

    /**
     * Tests the setContenu4() method.
     *
     * @return void
     */
    public function testSetContenu4() {

        $obj = new TestStringContenu4Trait();

        $obj->setContenu4("contenu4");
        $this->assertEquals("contenu4", $obj->getContenu4());
    }
}
