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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisDescriptifLocaux;

/**
 * Devis descriptif locaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisDescriptifLocauxTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNiveauNoeud() method.
     *
     * @return void
     */
    public function testSetNiveauNoeud(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Tests the setNoeudLocal() method.
     *
     * @return void
     */
    public function testSetNoeudLocal(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setNoeudLocal(true);
        $this->assertEquals(true, $obj->getNoeudLocal());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumeroNoeud() method.
     *
     * @return void
     */
    public function testSetNumeroNoeud(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Tests the setUniqIdNoeud() method.
     *
     * @return void
     */
    public function testSetUniqIdNoeud(): void {

        $obj = new DevisDescriptifLocaux();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisDescriptifLocaux();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNoeudLocal());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
