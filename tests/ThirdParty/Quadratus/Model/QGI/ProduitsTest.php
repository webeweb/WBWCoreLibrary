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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Produits;

/**
 * Produits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ProduitsTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Produits();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCompteur() method.
     *
     * @return void
     */
    public function testSetCompteur(): void {

        $obj = new Produits();

        $obj->setCompteur(10);
        $this->assertEquals(10, $obj->getCompteur());
    }

    /**
     * Tests the setCptMaj() method.
     *
     * @return void
     */
    public function testSetCptMaj(): void {

        $obj = new Produits();

        $obj->setCptMaj(10);
        $this->assertEquals(10, $obj->getCptMaj());
    }

    /**
     * Tests the setDernierNumero() method.
     *
     * @return void
     */
    public function testSetDernierNumero(): void {

        $obj = new Produits();

        $obj->setDernierNumero(10);
        $this->assertEquals(10, $obj->getDernierNumero());
    }

    /**
     * Tests the setFichierLicence() method.
     *
     * @return void
     */
    public function testSetFichierLicence(): void {

        $obj = new Produits();

        $obj->setFichierLicence("fichierLicence");
        $this->assertEquals("fichierLicence", $obj->getFichierLicence());
    }

    /**
     * Tests the setGammeWindows() method.
     *
     * @return void
     */
    public function testSetGammeWindows(): void {

        $obj = new Produits();

        $obj->setGammeWindows(true);
        $this->assertEquals(true, $obj->getGammeWindows());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Produits();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setLettreLicence() method.
     *
     * @return void
     */
    public function testSetLettreLicence(): void {

        $obj = new Produits();

        $obj->setLettreLicence("lettreLicence");
        $this->assertEquals("lettreLicence", $obj->getLettreLicence());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new Produits();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNomProdLicence() method.
     *
     * @return void
     */
    public function testSetNomProdLicence(): void {

        $obj = new Produits();

        $obj->setNomProdLicence("nomProdLicence");
        $this->assertEquals("nomProdLicence", $obj->getNomProdLicence());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Produits();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCompteur());
        $this->assertNull($obj->getCptMaj());
        $this->assertNull($obj->getDernierNumero());
        $this->assertNull($obj->getFichierLicence());
        $this->assertNull($obj->getGammeWindows());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getLettreLicence());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomProdLicence());
    }
}
