<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Centralisateur;

/**
 * Centralisateur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CentralisateurTest extends AbstractTestCase {

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Centralisateur();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCreditClasse15() method.
     *
     * @return void
     */
    public function testSetCreditClasse15(): void {

        $obj = new Centralisateur();

        $obj->setCreditClasse15(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClasse15());
    }

    /**
     * Tests the setCreditClasse67() method.
     *
     * @return void
     */
    public function testSetCreditClasse67(): void {

        $obj = new Centralisateur();

        $obj->setCreditClasse67(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClasse67());
    }

    /**
     * Tests the setCreditClient() method.
     *
     * @return void
     */
    public function testSetCreditClient(): void {

        $obj = new Centralisateur();

        $obj->setCreditClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClient());
    }

    /**
     * Tests the setCreditFournisseur() method.
     *
     * @return void
     */
    public function testSetCreditFournisseur(): void {

        $obj = new Centralisateur();

        $obj->setCreditFournisseur(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditFournisseur());
    }

    /**
     * Tests the setDebitClasse15() method.
     *
     * @return void
     */
    public function testSetDebitClasse15(): void {

        $obj = new Centralisateur();

        $obj->setDebitClasse15(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClasse15());
    }

    /**
     * Tests the setDebitClasse67() method.
     *
     * @return void
     */
    public function testSetDebitClasse67(): void {

        $obj = new Centralisateur();

        $obj->setDebitClasse67(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClasse67());
    }

    /**
     * Tests the setDebitClient() method.
     *
     * @return void
     */
    public function testSetDebitClient(): void {

        $obj = new Centralisateur();

        $obj->setDebitClient(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClient());
    }

    /**
     * Tests the setDebitFournisseur() method.
     *
     * @return void
     */
    public function testSetDebitFournisseur(): void {

        $obj = new Centralisateur();

        $obj->setDebitFournisseur(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitFournisseur());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new Centralisateur();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setNbLigneFolio() method.
     *
     * @return void
     */
    public function testSetNbLigneFolio(): void {

        $obj = new Centralisateur();

        $obj->setNbLigneFolio(10);
        $this->assertEquals(10, $obj->getNbLigneFolio());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new Centralisateur();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setProchaineLigne() method.
     *
     * @return void
     */
    public function testSetProchaineLigne(): void {

        $obj = new Centralisateur();

        $obj->setProchaineLigne(10);
        $this->assertEquals(10, $obj->getProchaineLigne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Centralisateur();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCreditClasse15());
        $this->assertNull($obj->getCreditClasse67());
        $this->assertNull($obj->getCreditClient());
        $this->assertNull($obj->getCreditFournisseur());
        $this->assertNull($obj->getDebitClasse15());
        $this->assertNull($obj->getDebitClasse67());
        $this->assertNull($obj->getDebitClient());
        $this->assertNull($obj->getDebitFournisseur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getNbLigneFolio());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProchaineLigne());
    }
}
