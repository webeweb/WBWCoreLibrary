<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelection;

/**
 * Clients selection test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelectionTest extends AbstractTestCase {

    /**
     * Tests the setChamp() method.
     *
     * @return void
     */
    public function testSetChamp(): void {

        $obj = new ClientsSelection();

        $obj->setChamp("champ");
        $this->assertEquals("champ", $obj->getChamp());
    }

    /**
     * Tests the setCodeCol() method.
     *
     * @return void
     */
    public function testSetCodeCol(): void {

        $obj = new ClientsSelection();

        $obj->setCodeCol("codeCol");
        $this->assertEquals("codeCol", $obj->getCodeCol());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ClientsSelection();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ClientsSelection();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new ClientsSelection();

        $obj->setValeur("valeur");
        $this->assertEquals("valeur", $obj->getValeur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsSelection();

        $this->assertNull($obj->getChamp());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValeur());
    }
}
