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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Historique_htabord;

/**
 * Historique_htabord model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Historique_htabordTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Historique_htabord();

        $this->assertNull($obj->getAlpha());
        $this->assertNull($obj->getAnN());
        $this->assertNull($obj->getAnN1());
        $this->assertNull($obj->getAnN2());
        $this->assertNull($obj->getBudget1());
        $this->assertNull($obj->getBudget2());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFlgAnN());
        $this->assertNull($obj->getFlgAnN1());
        $this->assertNull($obj->getFlgAnN2());
        $this->assertNull($obj->getFlgBudget1());
        $this->assertNull($obj->getFlgBudget2());
        $this->assertNull($obj->getFmtDec());
        $this->assertNull($obj->getFmtInt());
        $this->assertNull($obj->getMemo());
        $this->assertNull($obj->getNoConvEuro());
        $this->assertNull($obj->getRegle());
        $this->assertNull($obj->getRub());
        $this->assertNull($obj->getTypeZone());
    }

    /**
     * Tests the setAlpha() method.
     *
     * @return void
     */
    public function testSetAlpha() {

        $obj = new Historique_htabord();

        $obj->setAlpha("alpha");
        $this->assertEquals("alpha", $obj->getAlpha());
    }

    /**
     * Tests the setAnN() method.
     *
     * @return void
     */
    public function testSetAnN() {

        $obj = new Historique_htabord();

        $obj->setAnN(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN());
    }

    /**
     * Tests the setAnN1() method.
     *
     * @return void
     */
    public function testSetAnN1() {

        $obj = new Historique_htabord();

        $obj->setAnN1(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN1());
    }

    /**
     * Tests the setAnN2() method.
     *
     * @return void
     */
    public function testSetAnN2() {

        $obj = new Historique_htabord();

        $obj->setAnN2(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN2());
    }

    /**
     * Tests the setBudget1() method.
     *
     * @return void
     */
    public function testSetBudget1() {

        $obj = new Historique_htabord();

        $obj->setBudget1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget1());
    }

    /**
     * Tests the setBudget2() method.
     *
     * @return void
     */
    public function testSetBudget2() {

        $obj = new Historique_htabord();

        $obj->setBudget2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget2());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new Historique_htabord();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setFlgAnN() method.
     *
     * @return void
     */
    public function testSetFlgAnN() {

        $obj = new Historique_htabord();

        $obj->setFlgAnN(true);
        $this->assertEquals(true, $obj->getFlgAnN());
    }

    /**
     * Tests the setFlgAnN1() method.
     *
     * @return void
     */
    public function testSetFlgAnN1() {

        $obj = new Historique_htabord();

        $obj->setFlgAnN1(true);
        $this->assertEquals(true, $obj->getFlgAnN1());
    }

    /**
     * Tests the setFlgAnN2() method.
     *
     * @return void
     */
    public function testSetFlgAnN2() {

        $obj = new Historique_htabord();

        $obj->setFlgAnN2(true);
        $this->assertEquals(true, $obj->getFlgAnN2());
    }

    /**
     * Tests the setFlgBudget1() method.
     *
     * @return void
     */
    public function testSetFlgBudget1() {

        $obj = new Historique_htabord();

        $obj->setFlgBudget1(true);
        $this->assertEquals(true, $obj->getFlgBudget1());
    }

    /**
     * Tests the setFlgBudget2() method.
     *
     * @return void
     */
    public function testSetFlgBudget2() {

        $obj = new Historique_htabord();

        $obj->setFlgBudget2(true);
        $this->assertEquals(true, $obj->getFlgBudget2());
    }

    /**
     * Tests the setFmtDec() method.
     *
     * @return void
     */
    public function testSetFmtDec() {

        $obj = new Historique_htabord();

        $obj->setFmtDec(10);
        $this->assertEquals(10, $obj->getFmtDec());
    }

    /**
     * Tests the setFmtInt() method.
     *
     * @return void
     */
    public function testSetFmtInt() {

        $obj = new Historique_htabord();

        $obj->setFmtInt(10);
        $this->assertEquals(10, $obj->getFmtInt());
    }

    /**
     * Tests the setMemo() method.
     *
     * @return void
     */
    public function testSetMemo() {

        $obj = new Historique_htabord();

        $obj->setMemo("memo");
        $this->assertEquals("memo", $obj->getMemo());
    }

    /**
     * Tests the setNoConvEuro() method.
     *
     * @return void
     */
    public function testSetNoConvEuro() {

        $obj = new Historique_htabord();

        $obj->setNoConvEuro(true);
        $this->assertEquals(true, $obj->getNoConvEuro());
    }

    /**
     * Tests the setRegle() method.
     *
     * @return void
     */
    public function testSetRegle() {

        $obj = new Historique_htabord();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }

    /**
     * Tests the setRub() method.
     *
     * @return void
     */
    public function testSetRub() {

        $obj = new Historique_htabord();

        $obj->setRub("rub");
        $this->assertEquals("rub", $obj->getRub());
    }

    /**
     * Tests the setTypeZone() method.
     *
     * @return void
     */
    public function testSetTypeZone() {

        $obj = new Historique_htabord();

        $obj->setTypeZone("typeZone");
        $this->assertEquals("typeZone", $obj->getTypeZone());
    }
}