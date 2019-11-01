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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticleTaxe3Trait;

/**
 * Article taxe3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticleTaxe3TraitTest extends AbstractTestCase {

    /**
     * Tests the setArticleTaxe3() method.
     *
     * @return void
     */
    public function testSetArticleTaxe3() {

        $obj = new TestStringArticleTaxe3Trait();

        $obj->setArticleTaxe3("articleTaxe3");
        $this->assertEquals("articleTaxe3", $obj->getArticleTaxe3());
    }
}
