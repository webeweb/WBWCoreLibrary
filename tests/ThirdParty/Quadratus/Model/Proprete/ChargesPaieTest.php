<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChargesPaie;

/**
 * Charges paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChargesPaieTest extends AbstractTestCase {

    /**
     * Tests the setArbitrage() method.
     *
     * @return void
     */
    public function testSetArbitrage(): void {

        $obj = new ChargesPaie();

        $obj->setArbitrage(10.092018);
        $this->assertEquals(10.092018, $obj->getArbitrage());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new ChargesPaie();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setBrutAl() method.
     *
     * @return void
     */
    public function testSetBrutAl(): void {

        $obj = new ChargesPaie();

        $obj->setBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAl());
    }

    /**
     * Tests the setBrutAnl() method.
     *
     * @return void
     */
    public function testSetBrutAnl(): void {

        $obj = new ChargesPaie();

        $obj->setBrutAnl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAnl());
    }

    /**
     * Tests the setChargesPatronales() method.
     *
     * @return void
     */
    public function testSetChargesPatronales(): void {

        $obj = new ChargesPaie();

        $obj->setChargesPatronales(10.092018);
        $this->assertEquals(10.092018, $obj->getChargesPatronales());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new ChargesPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setEuro() method.
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new ChargesPaie();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests the setHeuresSup() method.
     *
     * @return void
     */
    public function testSetHeuresSup(): void {

        $obj = new ChargesPaie();

        $obj->setHeuresSup(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresSup());
    }

    /**
     * Tests the setImpos() method.
     *
     * @return void
     */
    public function testSetImpos(): void {

        $obj = new ChargesPaie();

        $obj->setImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getImpos());
    }

    /**
     * Tests the setIndemniteCp() method.
     *
     * @return void
     */
    public function testSetIndemniteCp(): void {

        $obj = new ChargesPaie();

        $obj->setIndemniteCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteCp());
    }

    /**
     * Tests the setIndemnitePrecarite() method.
     *
     * @return void
     */
    public function testSetIndemnitePrecarite(): void {

        $obj = new ChargesPaie();

        $obj->setIndemnitePrecarite(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnitePrecarite());
    }

    /**
     * Tests the setInteressement() method.
     *
     * @return void
     */
    public function testSetInteressement(): void {

        $obj = new ChargesPaie();

        $obj->setInteressement(10.092018);
        $this->assertEquals(10.092018, $obj->getInteressement());
    }

    /**
     * Tests the setMtNetPayeTheo() method.
     *
     * @return void
     */
    public function testSetMtNetPayeTheo(): void {

        $obj = new ChargesPaie();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests the setNbHAbs() method.
     *
     * @return void
     */
    public function testSetNbHAbs(): void {

        $obj = new ChargesPaie();

        $obj->setNbHAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbs());
    }

    /**
     * Tests the setNbHBase() method.
     *
     * @return void
     */
    public function testSetNbHBase(): void {

        $obj = new ChargesPaie();

        $obj->setNbHBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBase());
    }

    /**
     * Tests the setNbHRc() method.
     *
     * @return void
     */
    public function testSetNbHRc(): void {

        $obj = new ChargesPaie();

        $obj->setNbHRc(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRc());
    }

    /**
     * Tests the setNbHSup1() method.
     *
     * @return void
     */
    public function testSetNbHSup1(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests the setNbHSup2() method.
     *
     * @return void
     */
    public function testSetNbHSup2(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests the setNbHSup3() method.
     *
     * @return void
     */
    public function testSetNbHSup3(): void {

        $obj = new ChargesPaie();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests the setNbHn() method.
     *
     * @return void
     */
    public function testSetNbHn(): void {

        $obj = new ChargesPaie();

        $obj->setNbHn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHn());
    }

    /**
     * Tests the setNbHt() method.
     *
     * @return void
     */
    public function testSetNbHt(): void {

        $obj = new ChargesPaie();

        $obj->setNbHt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHt());
    }

    /**
     * Tests the setParticipation() method.
     *
     * @return void
     */
    public function testSetParticipation(): void {

        $obj = new ChargesPaie();

        $obj->setParticipation(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipation());
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

        $obj = new ChargesPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setProvisionCp() method.
     *
     * @return void
     */
    public function testSetProvisionCp(): void {

        $obj = new ChargesPaie();

        $obj->setProvisionCp(10.092018);
        $this->assertEquals(10.092018, $obj->getProvisionCp());
    }

    /**
     * Tests the setSBase() method.
     *
     * @return void
     */
    public function testSetSBase(): void {

        $obj = new ChargesPaie();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests the setSalaire() method.
     *
     * @return void
     */
    public function testSetSalaire(): void {

        $obj = new ChargesPaie();

        $obj->setSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaire());
    }

    /**
     * Tests the setTotRet() method.
     *
     * @return void
     */
    public function testSetTotRet(): void {

        $obj = new ChargesPaie();

        $obj->setTotRet(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRet());
    }

    /**
     * Tests the setTrA() method.
     *
     * @return void
     */
    public function testSetTrA(): void {

        $obj = new ChargesPaie();

        $obj->setTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrA());
    }

    /**
     * Tests the setTrB() method.
     *
     * @return void
     */
    public function testSetTrB(): void {

        $obj = new ChargesPaie();

        $obj->setTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrB());
    }

    /**
     * Tests the setTrC() method.
     *
     * @return void
     */
    public function testSetTrC(): void {

        $obj = new ChargesPaie();

        $obj->setTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrC());
    }

    /**
     * Tests the setTxHn() method.
     *
     * @return void
     */
    public function testSetTxHn(): void {

        $obj = new ChargesPaie();

        $obj->setTxHn(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHn());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChargesPaie();

        $this->assertNull($obj->getArbitrage());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getBrutAnl());
        $this->assertNull($obj->getChargesPatronales());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getHeuresSup());
        $this->assertNull($obj->getImpos());
        $this->assertNull($obj->getIndemniteCp());
        $this->assertNull($obj->getIndemnitePrecarite());
        $this->assertNull($obj->getInteressement());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHBase());
        $this->assertNull($obj->getNbHn());
        $this->assertNull($obj->getNbHRc());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHt());
        $this->assertNull($obj->getParticipation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProvisionCp());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSalaire());
        $this->assertNull($obj->getTotRet());
        $this->assertNull($obj->getTrA());
        $this->assertNull($obj->getTrB());
        $this->assertNull($obj->getTrC());
        $this->assertNull($obj->getTxHn());
    }
}
