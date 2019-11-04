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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHjf4Trait;

/**
 * Nb h j f4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHjf4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHjf4() method.
     *
     * @return void
     */
    public function testSetNbHjf4() {

        $obj = new TestFloatNbHjf4Trait();

        $obj->setNbHjf4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjf4());
    }
}