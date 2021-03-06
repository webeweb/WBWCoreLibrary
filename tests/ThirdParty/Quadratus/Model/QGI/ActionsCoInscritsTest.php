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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoInscrits;

/**
 * Actions co inscrits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInscritsTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeManif() method.
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Tests the setConfirme() method.
     *
     * @return void
     */
    public function testSetConfirme(): void {

        $obj = new ActionsCoInscrits();

        $obj->setConfirme(true);
        $this->assertEquals(true, $obj->getConfirme());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new ActionsCoInscrits();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setFax() method.
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new ActionsCoInscrits();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumInterlocuteur() method.
     *
     * @return void
     */
    public function testSetNumInterlocuteur(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Tests the setNumSeance() method.
     *
     * @return void
     */
    public function testSetNumSeance(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumSeance(10);
        $this->assertEquals(10, $obj->getNumSeance());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new ActionsCoInscrits();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setPresent() method.
     *
     * @return void
     */
    public function testSetPresent(): void {

        $obj = new ActionsCoInscrits();

        $obj->setPresent(true);
        $this->assertEquals(true, $obj->getPresent());
    }

    /**
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new ActionsCoInscrits();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests the setTypeInvite() method.
     *
     * @return void
     */
    public function testSetTypeInvite(): void {

        $obj = new ActionsCoInscrits();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoInscrits();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getConfirme());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumInterlocuteur());
        $this->assertNull($obj->getNumSeance());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPresent());
        $this->assertNull($obj->getTelephone());
        $this->assertNull($obj->getTypeInvite());
    }
}
