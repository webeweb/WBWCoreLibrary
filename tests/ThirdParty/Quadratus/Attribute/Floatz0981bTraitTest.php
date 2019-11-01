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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0981bTrait;

/**
 * z0981b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0981bTraitTest extends AbstractTestCase {

    /**
     * Tests the setz0981b() method.
     *
     * @return void
     */
    public function testSetz0981b() {

        $obj = new TestFloatz0981bTrait();

        $obj->setz0981b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0981b());
    }
}
