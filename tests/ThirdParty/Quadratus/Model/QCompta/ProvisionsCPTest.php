<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ProvisionsCP;

/**
 * Provisions c p model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ProvisionsCPTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ProvisionsCP();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getColPourSalRef());
        $this->assertNull($obj->getDernierSalaire());
        $this->assertNull($obj->getMoyenneSalaires());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNomCompletEmp());
        $this->assertNull($obj->getNumeroEmp());
        $this->assertNull($obj->getProvisionTotale());
        $this->assertNull($obj->getSalaireRef());
        $this->assertNull($obj->getSoldeJoursN());
        $this->assertNull($obj->getSoldeJoursN_1());
        $this->assertNull($obj->getTxChargesSoc());
    }

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new ProvisionsCP();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setColPourSalRef() method.
     *
     * @return void
     */
    public function testSetColPourSalRef() {

        $obj = new ProvisionsCP();

        $obj->setColPourSalRef("colPourSalRef");
        $this->assertEquals("colPourSalRef", $obj->getColPourSalRef());
    }

    /**
     * Tests the setDernierSalaire() method.
     *
     * @return void
     */
    public function testSetDernierSalaire() {

        $obj = new ProvisionsCP();

        $obj->setDernierSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierSalaire());
    }

    /**
     * Tests the setMoyenneSalaires() method.
     *
     * @return void
     */
    public function testSetMoyenneSalaires() {

        $obj = new ProvisionsCP();

        $obj->setMoyenneSalaires(10.092018);
        $this->assertEquals(10.092018, $obj->getMoyenneSalaires());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new ProvisionsCP();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNomCompletEmp() method.
     *
     * @return void
     */
    public function testSetNomCompletEmp() {

        $obj = new ProvisionsCP();

        $obj->setNomCompletEmp("nomCompletEmp");
        $this->assertEquals("nomCompletEmp", $obj->getNomCompletEmp());
    }

    /**
     * Tests the setNumeroEmp() method.
     *
     * @return void
     */
    public function testSetNumeroEmp() {

        $obj = new ProvisionsCP();

        $obj->setNumeroEmp("numeroEmp");
        $this->assertEquals("numeroEmp", $obj->getNumeroEmp());
    }

    /**
     * Tests the setProvisionTotale() method.
     *
     * @return void
     */
    public function testSetProvisionTotale() {

        $obj = new ProvisionsCP();

        $obj->setProvisionTotale(10.092018);
        $this->assertEquals(10.092018, $obj->getProvisionTotale());
    }

    /**
     * Tests the setSalaireRef() method.
     *
     * @return void
     */
    public function testSetSalaireRef() {

        $obj = new ProvisionsCP();

        $obj->setSalaireRef(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRef());
    }

    /**
     * Tests the setSoldeJoursN() method.
     *
     * @return void
     */
    public function testSetSoldeJoursN() {

        $obj = new ProvisionsCP();

        $obj->setSoldeJoursN(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeJoursN());
    }

    /**
     * Tests the setSoldeJoursN_1() method.
     *
     * @return void
     */
    public function testSetSoldeJoursN_1() {

        $obj = new ProvisionsCP();

        $obj->setSoldeJoursN_1(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeJoursN_1());
    }

    /**
     * Tests the setTxChargesSoc() method.
     *
     * @return void
     */
    public function testSetTxChargesSoc() {

        $obj = new ProvisionsCP();

        $obj->setTxChargesSoc(10.092018);
        $this->assertEquals(10.092018, $obj->getTxChargesSoc());
    }
}