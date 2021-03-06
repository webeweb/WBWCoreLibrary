<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConventionsColLignesGrillesAnc;

/**
 * Conventions col lignes grilles anc test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColLignesGrillesAncTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeConvention() method.
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests the setNbMoisEcoules() method.
     *
     * @return void
     */
    public function testSetNbMoisEcoules(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setNbMoisEcoules(10);
        $this->assertEquals(10, $obj->getNbMoisEcoules());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColLignesGrillesAnc();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getNbMoisEcoules());
        $this->assertNull($obj->getValeur());
    }
}
