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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0044bTrait;

/**
 * z0044b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0044bTraitTest extends AbstractTestCase {

    /**
     * Tests the setz0044b() method.
     *
     * @return void
     */
    public function testSetz0044b() {

        $obj = new TestFloatz0044bTrait();

        $obj->setz0044b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0044b());
    }
}
