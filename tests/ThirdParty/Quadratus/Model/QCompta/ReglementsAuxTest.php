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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ReglementsAux;

/**
 * Reglements aux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ReglementsAuxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ReglementsAux();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getAutreDomBanque());
        $this->assertNull($obj->getAutreRib());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeModePaiement());
        $this->assertNull($obj->getDans1Groupe());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getMontantGroupe());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNoRib());
        $this->assertNull($obj->getNumGroupe());
        $this->assertNull($obj->getNumLotLCR());
        $this->assertNull($obj->getNumLotLettreP());
        $this->assertNull($obj->getNumLotTraite());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniqEcriture());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTypeReglement());
    }

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new ReglementsAux();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setAutreDomBanque() method.
     *
     * @return void
     */
    public function testSetAutreDomBanque() {

        $obj = new ReglementsAux();

        $obj->setAutreDomBanque("autreDomBanque");
        $this->assertEquals("autreDomBanque", $obj->getAutreDomBanque());
    }

    /**
     * Tests the setAutreRib() method.
     *
     * @return void
     */
    public function testSetAutreRib() {

        $obj = new ReglementsAux();

        $obj->setAutreRib("autreRib");
        $this->assertEquals("autreRib", $obj->getAutreRib());
    }

    /**
     * Tests the setCodeJournalBanque() method.
     *
     * @return void
     */
    public function testSetCodeJournalBanque() {

        $obj = new ReglementsAux();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Tests the setCodeModePaiement() method.
     *
     * @return void
     */
    public function testSetCodeModePaiement() {

        $obj = new ReglementsAux();

        $obj->setCodeModePaiement("codeModePaiement");
        $this->assertEquals("codeModePaiement", $obj->getCodeModePaiement());
    }

    /**
     * Tests the setDans1Groupe() method.
     *
     * @return void
     */
    public function testSetDans1Groupe() {

        $obj = new ReglementsAux();

        $obj->setDans1Groupe(true);
        $this->assertEquals(true, $obj->getDans1Groupe());
    }

    /**
     * Tests the setDateEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance() {

        $obj = new ReglementsAux();

        $obj->setDateEcheance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheance());
    }

    /**
     * Tests the setMontantGroupe() method.
     *
     * @return void
     */
    public function testSetMontantGroupe() {

        $obj = new ReglementsAux();

        $obj->setMontantGroupe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGroupe());
    }

    /**
     * Tests the setMontantSaisiCredit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiCredit() {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests the setMontantSaisiDebit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiDebit() {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit() {

        $obj = new ReglementsAux();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit() {

        $obj = new ReglementsAux();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setNoRib() method.
     *
     * @return void
     */
    public function testSetNoRib() {

        $obj = new ReglementsAux();

        $obj->setNoRib("noRib");
        $this->assertEquals("noRib", $obj->getNoRib());
    }

    /**
     * Tests the setNumGroupe() method.
     *
     * @return void
     */
    public function testSetNumGroupe() {

        $obj = new ReglementsAux();

        $obj->setNumGroupe(10);
        $this->assertEquals(10, $obj->getNumGroupe());
    }

    /**
     * Tests the setNumLotLCR() method.
     *
     * @return void
     */
    public function testSetNumLotLCR() {

        $obj = new ReglementsAux();

        $obj->setNumLotLCR(10);
        $this->assertEquals(10, $obj->getNumLotLCR());
    }

    /**
     * Tests the setNumLotLettreP() method.
     *
     * @return void
     */
    public function testSetNumLotLettreP() {

        $obj = new ReglementsAux();

        $obj->setNumLotLettreP(10);
        $this->assertEquals(10, $obj->getNumLotLettreP());
    }

    /**
     * Tests the setNumLotTraite() method.
     *
     * @return void
     */
    public function testSetNumLotTraite() {

        $obj = new ReglementsAux();

        $obj->setNumLotTraite(10);
        $this->assertEquals(10, $obj->getNumLotTraite());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new ReglementsAux();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumUniqEcriture() method.
     *
     * @return void
     */
    public function testSetNumUniqEcriture() {

        $obj = new ReglementsAux();

        $obj->setNumUniqEcriture(10);
        $this->assertEquals(10, $obj->getNumUniqEcriture());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new ReglementsAux();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setReferenceTire() method.
     *
     * @return void
     */
    public function testSetReferenceTire() {

        $obj = new ReglementsAux();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Tests the setTypeReglement() method.
     *
     * @return void
     */
    public function testSetTypeReglement() {

        $obj = new ReglementsAux();

        $obj->setTypeReglement("typeReglement");
        $this->assertEquals("typeReglement", $obj->getTypeReglement());
    }
}
