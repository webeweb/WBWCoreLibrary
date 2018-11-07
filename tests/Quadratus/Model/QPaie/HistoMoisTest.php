<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\HistoMois;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Histo mois model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class HistoMoisTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HistoMois();

		$this->assertNull($obj->getIndicePeriode());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getPeriode());
	}

	/**
	 * Tests the setIndicePeriode() method.
	 *
	 * @return void
	 */
	public function testSetIndicePeriode() {

		$obj = new HistoMois();

		$obj->setIndicePeriode(10);
		$this->assertEquals(10, $obj->getIndicePeriode());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new HistoMois();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new HistoMois();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new HistoMois();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

}