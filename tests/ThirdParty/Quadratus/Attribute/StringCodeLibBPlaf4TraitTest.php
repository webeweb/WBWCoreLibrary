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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBPlaf4Trait;

/**
 * Code lib b plaf4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBPlaf4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf4() {

        $obj = new TestStringCodeLibBPlaf4Trait();

        $obj->setCodeLibBPlaf4("codeLibBPlaf4");
        $this->assertEquals("codeLibBPlaf4", $obj->getCodeLibBPlaf4());
    }
}
