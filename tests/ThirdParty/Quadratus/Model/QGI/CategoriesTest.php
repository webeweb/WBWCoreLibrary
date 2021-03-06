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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Categories;

/**
 * Categories test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CategoriesTest extends AbstractTestCase {

    /**
     * Tests the setCarTec() method.
     *
     * @return void
     */
    public function testSetCarTec(): void {

        $obj = new Categories();

        $obj->setCarTec("carTec");
        $this->assertEquals("carTec", $obj->getCarTec());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Categories();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setParent() method.
     *
     * @return void
     */
    public function testSetParent(): void {

        $obj = new Categories();

        $obj->setParent("parent");
        $this->assertEquals("parent", $obj->getParent());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Categories();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Categories();

        $this->assertNull($obj->getCarTec());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getType());
    }
}
