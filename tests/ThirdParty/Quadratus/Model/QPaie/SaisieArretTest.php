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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SaisieArret;

/**
 * Saisie arret test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SaisieArretTest extends AbstractTestCase {

    /**
     * Tests the setDtCourrier() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCourrier(): void {

        // Set a Date/time mock.
        $dtCourrier = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtCourrier($dtCourrier);
        $this->assertSame($dtCourrier, $obj->getDtCourrier());
    }

    /**
     * Tests the setDtDebutSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutSaisie(): void {

        // Set a Date/time mock.
        $dtDebutSaisie = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtDebutSaisie($dtDebutSaisie);
        $this->assertSame($dtDebutSaisie, $obj->getDtDebutSaisie());
    }

    /**
     * Tests the setDtFinSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinSaisie(): void {

        // Set a Date/time mock.
        $dtFinSaisie = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtFinSaisie($dtFinSaisie);
        $this->assertSame($dtFinSaisie, $obj->getDtFinSaisie());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SaisieArret();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMtCreance() method.
     *
     * @return void
     */
    public function testSetMtCreance(): void {

        $obj = new SaisieArret();

        $obj->setMtCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreance());
    }

    /**
     * Tests the setMtDejaPaye() method.
     *
     * @return void
     */
    public function testSetMtDejaPaye(): void {

        $obj = new SaisieArret();

        $obj->setMtDejaPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDejaPaye());
    }

    /**
     * Tests the setNbACharge() method.
     *
     * @return void
     */
    public function testSetNbACharge(): void {

        $obj = new SaisieArret();

        $obj->setNbACharge("nbACharge");
        $this->assertEquals("nbACharge", $obj->getNbACharge());
    }

    /**
     * Tests the setNomTribunal() method.
     *
     * @return void
     */
    public function testSetNomTribunal(): void {

        $obj = new SaisieArret();

        $obj->setNomTribunal("nomTribunal");
        $this->assertEquals("nomTribunal", $obj->getNomTribunal());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new SaisieArret();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTypeSaisie() method.
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new SaisieArret();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SaisieArret();

        $this->assertNull($obj->getDtCourrier());
        $this->assertNull($obj->getDtDebutSaisie());
        $this->assertNull($obj->getDtFinSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMtCreance());
        $this->assertNull($obj->getMtDejaPaye());
        $this->assertNull($obj->getNbACharge());
        $this->assertNull($obj->getNomTribunal());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeSaisie());
    }
}
