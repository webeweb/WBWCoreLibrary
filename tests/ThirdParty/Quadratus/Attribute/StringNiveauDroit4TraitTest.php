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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit4Trait;

/**
 * Niveau droit4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit4() method.
     *
     * @return void
     */
    public function testSetNiveauDroit4() {

        $obj = new TestStringNiveauDroit4Trait();

        $obj->setNiveauDroit4("niveauDroit4");
        $this->assertEquals("niveauDroit4", $obj->getNiveauDroit4());
    }
}
