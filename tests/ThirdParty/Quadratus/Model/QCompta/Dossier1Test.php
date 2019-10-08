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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier1;

/**
 * Dossier1 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier1Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier1();

        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCalculAnaFait());
        $this->assertNull($obj->getCheminImplantationAscii());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCleAcces1());
        $this->assertNull($obj->getCleAcces10());
        $this->assertNull($obj->getCleAcces2());
        $this->assertNull($obj->getCleAcces3());
        $this->assertNull($obj->getCleAcces4());
        $this->assertNull($obj->getCleAcces5());
        $this->assertNull($obj->getCleAcces6());
        $this->assertNull($obj->getCleAcces7());
        $this->assertNull($obj->getCleAcces8());
        $this->assertNull($obj->getCleAcces9());
        $this->assertNull($obj->getCleDeblocageJournaux());
        $this->assertNull($obj->getClePortable());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeNAF());
        $this->assertNull($obj->getCodeNAF2008());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCopieBackup());
        $this->assertNull($obj->getCptDebSuiviClasse0());
        $this->assertNull($obj->getCptDebSuiviClasse1());
        $this->assertNull($obj->getCptDebSuiviClasse2());
        $this->assertNull($obj->getCptDebSuiviClasse3());
        $this->assertNull($obj->getCptDebSuiviClasse4());
        $this->assertNull($obj->getCptDebSuiviClasse5());
        $this->assertNull($obj->getCptDebSuiviClasse8());
        $this->assertNull($obj->getCptDebSuiviClasse9());
        $this->assertNull($obj->getCptFinSuiviClasse0());
        $this->assertNull($obj->getCptFinSuiviClasse1());
        $this->assertNull($obj->getCptFinSuiviClasse2());
        $this->assertNull($obj->getCptFinSuiviClasse3());
        $this->assertNull($obj->getCptFinSuiviClasse4());
        $this->assertNull($obj->getCptFinSuiviClasse5());
        $this->assertNull($obj->getCptFinSuiviClasse8());
        $this->assertNull($obj->getCptFinSuiviClasse9());
        $this->assertNull($obj->getCreateurDossier());
        $this->assertNull($obj->getDLU());
        $this->assertNull($obj->getDateLimiteSaisie());
        $this->assertNull($obj->getDateSysChangtEx());
        $this->assertNull($obj->getDateSysCloturePeriode());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDateTravail());
        $this->assertNull($obj->getDebutExercice());
        $this->assertNull($obj->getDebutExercice_1());
        $this->assertNull($obj->getDelaiLimiteSaisie());
        $this->assertNull($obj->getDroitCreationTypeCpt1());
        $this->assertNull($obj->getDroitCreationTypeCpt10());
        $this->assertNull($obj->getDroitCreationTypeCpt2());
        $this->assertNull($obj->getDroitCreationTypeCpt3());
        $this->assertNull($obj->getDroitCreationTypeCpt4());
        $this->assertNull($obj->getDroitCreationTypeCpt5());
        $this->assertNull($obj->getDroitCreationTypeCpt6());
        $this->assertNull($obj->getDroitCreationTypeCpt7());
        $this->assertNull($obj->getDroitCreationTypeCpt8());
        $this->assertNull($obj->getDroitCreationTypeCpt9());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getDureeExercice_1());
        $this->assertNull($obj->getEditDateSysteme());
        $this->assertNull($obj->getEditPageGarde());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEuroOuFranc());
        $this->assertNull($obj->getFamille1());
        $this->assertNull($obj->getFamille10());
        $this->assertNull($obj->getFamille2());
        $this->assertNull($obj->getFamille3());
        $this->assertNull($obj->getFamille4());
        $this->assertNull($obj->getFamille5());
        $this->assertNull($obj->getFamille6());
        $this->assertNull($obj->getFamille7());
        $this->assertNull($obj->getFamille8());
        $this->assertNull($obj->getFamille9());
        $this->assertNull($obj->getFamilleAnalytique());
        $this->assertNull($obj->getFinExercice());
        $this->assertNull($obj->getFinExercice_1());
        $this->assertNull($obj->getGestionComptaEco());
        $this->assertNull($obj->getGroupeAppClients());
        $this->assertNull($obj->getLRActive());
        $this->assertNull($obj->getLRPeriode());
        $this->assertNull($obj->getModuleAgrActif());
        $this->assertNull($obj->getMultiDossiers());
        $this->assertNull($obj->getNatureMenu1());
        $this->assertNull($obj->getNatureMenu10());
        $this->assertNull($obj->getNatureMenu2());
        $this->assertNull($obj->getNatureMenu3());
        $this->assertNull($obj->getNatureMenu4());
        $this->assertNull($obj->getNatureMenu5());
        $this->assertNull($obj->getNatureMenu6());
        $this->assertNull($obj->getNatureMenu7());
        $this->assertNull($obj->getNatureMenu8());
        $this->assertNull($obj->getNatureMenu9());
        $this->assertNull($obj->getNatureRegle1());
        $this->assertNull($obj->getNatureRegle10());
        $this->assertNull($obj->getNatureRegle2());
        $this->assertNull($obj->getNatureRegle3());
        $this->assertNull($obj->getNatureRegle4());
        $this->assertNull($obj->getNatureRegle5());
        $this->assertNull($obj->getNatureRegle6());
        $this->assertNull($obj->getNatureRegle7());
        $this->assertNull($obj->getNatureRegle8());
        $this->assertNull($obj->getNatureRegle9());
        $this->assertNull($obj->getNiveauAnalytique());
        $this->assertNull($obj->getNiveauDroit1());
        $this->assertNull($obj->getNiveauDroit10());
        $this->assertNull($obj->getNiveauDroit2());
        $this->assertNull($obj->getNiveauDroit3());
        $this->assertNull($obj->getNiveauDroit4());
        $this->assertNull($obj->getNiveauDroit5());
        $this->assertNull($obj->getNiveauDroit6());
        $this->assertNull($obj->getNiveauDroit7());
        $this->assertNull($obj->getNiveauDroit8());
        $this->assertNull($obj->getNiveauDroit9());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getPasEcritureRB());
        $this->assertNull($obj->getPasModifRIBRegl());
        $this->assertNull($obj->getPeriodeCloturee());
        $this->assertNull($obj->getPeriodeValidee());
        $this->assertNull($obj->getProchainNumPiece());
        $this->assertNull($obj->getRC());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getSaisieImmoEnEcriture());
        $this->assertNull($obj->getSauveCommun());
        $this->assertNull($obj->getSauveCompresse());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSuiviAffTout());
        $this->assertNull($obj->getSuiviAna2());
        $this->assertNull($obj->getSuiviAnaClasse0());
        $this->assertNull($obj->getSuiviAnaClasse1());
        $this->assertNull($obj->getSuiviAnaClasse2());
        $this->assertNull($obj->getSuiviAnaClasse3());
        $this->assertNull($obj->getSuiviAnaClasse4());
        $this->assertNull($obj->getSuiviAnaClasse5());
        $this->assertNull($obj->getSuiviAnaClasse8());
        $this->assertNull($obj->getSuiviAnaClasse9());
        $this->assertNull($obj->getSuiviAnaFacultatif());
        $this->assertNull($obj->getTvaCle());
        $this->assertNull($obj->getTvaCodeDossier());
        $this->assertNull($obj->getTvaCodeRecette());
        $this->assertNull($obj->getVentilationsCommunes());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new Dossier1();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Dossier1();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCalculAnaFait() method.
     *
     * @return void
     */
    public function testSetCalculAnaFait() {

        $obj = new Dossier1();

        $obj->setCalculAnaFait(true);
        $this->assertEquals(true, $obj->getCalculAnaFait());
    }

    /**
     * Tests the setCheminImplantationAscii() method.
     *
     * @return void
     */
    public function testSetCheminImplantationAscii() {

        $obj = new Dossier1();

        $obj->setCheminImplantationAscii("cheminImplantationAscii");
        $this->assertEquals("cheminImplantationAscii", $obj->getCheminImplantationAscii());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite() {

        $obj = new Dossier1();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCleAcces1() method.
     *
     * @return void
     */
    public function testSetCleAcces1() {

        $obj = new Dossier1();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }

    /**
     * Tests the setCleAcces10() method.
     *
     * @return void
     */
    public function testSetCleAcces10() {

        $obj = new Dossier1();

        $obj->setCleAcces10("cleAcces10");
        $this->assertEquals("cleAcces10", $obj->getCleAcces10());
    }

    /**
     * Tests the setCleAcces2() method.
     *
     * @return void
     */
    public function testSetCleAcces2() {

        $obj = new Dossier1();

        $obj->setCleAcces2("cleAcces2");
        $this->assertEquals("cleAcces2", $obj->getCleAcces2());
    }

    /**
     * Tests the setCleAcces3() method.
     *
     * @return void
     */
    public function testSetCleAcces3() {

        $obj = new Dossier1();

        $obj->setCleAcces3("cleAcces3");
        $this->assertEquals("cleAcces3", $obj->getCleAcces3());
    }

    /**
     * Tests the setCleAcces4() method.
     *
     * @return void
     */
    public function testSetCleAcces4() {

        $obj = new Dossier1();

        $obj->setCleAcces4("cleAcces4");
        $this->assertEquals("cleAcces4", $obj->getCleAcces4());
    }

    /**
     * Tests the setCleAcces5() method.
     *
     * @return void
     */
    public function testSetCleAcces5() {

        $obj = new Dossier1();

        $obj->setCleAcces5("cleAcces5");
        $this->assertEquals("cleAcces5", $obj->getCleAcces5());
    }

    /**
     * Tests the setCleAcces6() method.
     *
     * @return void
     */
    public function testSetCleAcces6() {

        $obj = new Dossier1();

        $obj->setCleAcces6("cleAcces6");
        $this->assertEquals("cleAcces6", $obj->getCleAcces6());
    }

    /**
     * Tests the setCleAcces7() method.
     *
     * @return void
     */
    public function testSetCleAcces7() {

        $obj = new Dossier1();

        $obj->setCleAcces7("cleAcces7");
        $this->assertEquals("cleAcces7", $obj->getCleAcces7());
    }

    /**
     * Tests the setCleAcces8() method.
     *
     * @return void
     */
    public function testSetCleAcces8() {

        $obj = new Dossier1();

        $obj->setCleAcces8("cleAcces8");
        $this->assertEquals("cleAcces8", $obj->getCleAcces8());
    }

    /**
     * Tests the setCleAcces9() method.
     *
     * @return void
     */
    public function testSetCleAcces9() {

        $obj = new Dossier1();

        $obj->setCleAcces9("cleAcces9");
        $this->assertEquals("cleAcces9", $obj->getCleAcces9());
    }

    /**
     * Tests the setCleDeblocageJournaux() method.
     *
     * @return void
     */
    public function testSetCleDeblocageJournaux() {

        $obj = new Dossier1();

        $obj->setCleDeblocageJournaux("cleDeblocageJournaux");
        $this->assertEquals("cleDeblocageJournaux", $obj->getCleDeblocageJournaux());
    }

    /**
     * Tests the setClePortable() method.
     *
     * @return void
     */
    public function testSetClePortable() {

        $obj = new Dossier1();

        $obj->setClePortable("clePortable");
        $this->assertEquals("clePortable", $obj->getClePortable());
    }

    /**
     * Tests the setCodeEquipe() method.
     *
     * @return void
     */
    public function testSetCodeEquipe() {

        $obj = new Dossier1();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests the setCodeNAF() method.
     *
     * @return void
     */
    public function testSetCodeNAF() {

        $obj = new Dossier1();

        $obj->setCodeNAF("codeNAF");
        $this->assertEquals("codeNAF", $obj->getCodeNAF());
    }

    /**
     * Tests the setCodeNAF2008() method.
     *
     * @return void
     */
    public function testSetCodeNAF2008() {

        $obj = new Dossier1();

        $obj->setCodeNAF2008("codeNAF2008");
        $this->assertEquals("codeNAF2008", $obj->getCodeNAF2008());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new Dossier1();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Dossier1();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Dossier1();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCopieBackup() method.
     *
     * @return void
     */
    public function testSetCopieBackup() {

        $obj = new Dossier1();

        $obj->setCopieBackup("copieBackup");
        $this->assertEquals("copieBackup", $obj->getCopieBackup());
    }

    /**
     * Tests the setCptDebSuiviClasse0() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse0() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse0("cptDebSuiviClasse0");
        $this->assertEquals("cptDebSuiviClasse0", $obj->getCptDebSuiviClasse0());
    }

    /**
     * Tests the setCptDebSuiviClasse1() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse1() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse1("cptDebSuiviClasse1");
        $this->assertEquals("cptDebSuiviClasse1", $obj->getCptDebSuiviClasse1());
    }

    /**
     * Tests the setCptDebSuiviClasse2() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse2() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse2("cptDebSuiviClasse2");
        $this->assertEquals("cptDebSuiviClasse2", $obj->getCptDebSuiviClasse2());
    }

    /**
     * Tests the setCptDebSuiviClasse3() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse3() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse3("cptDebSuiviClasse3");
        $this->assertEquals("cptDebSuiviClasse3", $obj->getCptDebSuiviClasse3());
    }

    /**
     * Tests the setCptDebSuiviClasse4() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse4() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse4("cptDebSuiviClasse4");
        $this->assertEquals("cptDebSuiviClasse4", $obj->getCptDebSuiviClasse4());
    }

    /**
     * Tests the setCptDebSuiviClasse5() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse5() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse5("cptDebSuiviClasse5");
        $this->assertEquals("cptDebSuiviClasse5", $obj->getCptDebSuiviClasse5());
    }

    /**
     * Tests the setCptDebSuiviClasse8() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse8() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse8("cptDebSuiviClasse8");
        $this->assertEquals("cptDebSuiviClasse8", $obj->getCptDebSuiviClasse8());
    }

    /**
     * Tests the setCptDebSuiviClasse9() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse9() {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse9("cptDebSuiviClasse9");
        $this->assertEquals("cptDebSuiviClasse9", $obj->getCptDebSuiviClasse9());
    }

    /**
     * Tests the setCptFinSuiviClasse0() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse0() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse0("cptFinSuiviClasse0");
        $this->assertEquals("cptFinSuiviClasse0", $obj->getCptFinSuiviClasse0());
    }

    /**
     * Tests the setCptFinSuiviClasse1() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse1() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse1("cptFinSuiviClasse1");
        $this->assertEquals("cptFinSuiviClasse1", $obj->getCptFinSuiviClasse1());
    }

    /**
     * Tests the setCptFinSuiviClasse2() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse2() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse2("cptFinSuiviClasse2");
        $this->assertEquals("cptFinSuiviClasse2", $obj->getCptFinSuiviClasse2());
    }

    /**
     * Tests the setCptFinSuiviClasse3() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse3() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse3("cptFinSuiviClasse3");
        $this->assertEquals("cptFinSuiviClasse3", $obj->getCptFinSuiviClasse3());
    }

    /**
     * Tests the setCptFinSuiviClasse4() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse4() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse4("cptFinSuiviClasse4");
        $this->assertEquals("cptFinSuiviClasse4", $obj->getCptFinSuiviClasse4());
    }

    /**
     * Tests the setCptFinSuiviClasse5() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse5() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse5("cptFinSuiviClasse5");
        $this->assertEquals("cptFinSuiviClasse5", $obj->getCptFinSuiviClasse5());
    }

    /**
     * Tests the setCptFinSuiviClasse8() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse8() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse8("cptFinSuiviClasse8");
        $this->assertEquals("cptFinSuiviClasse8", $obj->getCptFinSuiviClasse8());
    }

    /**
     * Tests the setCptFinSuiviClasse9() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse9() {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse9("cptFinSuiviClasse9");
        $this->assertEquals("cptFinSuiviClasse9", $obj->getCptFinSuiviClasse9());
    }

    /**
     * Tests the setCreateurDossier() method.
     *
     * @return void
     */
    public function testSetCreateurDossier() {

        $obj = new Dossier1();

        $obj->setCreateurDossier("createurDossier");
        $this->assertEquals("createurDossier", $obj->getCreateurDossier());
    }

    /**
     * Tests the setDLU() method.
     *
     * @return void
     */
    public function testSetDLU() {

        $obj = new Dossier1();

        $obj->setDLU("dLU");
        $this->assertEquals("dLU", $obj->getDLU());
    }

    /**
     * Tests the setDateLimiteSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteSaisie() {

        $obj = new Dossier1();

        $obj->setDateLimiteSaisie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLimiteSaisie());
    }

    /**
     * Tests the setDateSysChangtEx() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysChangtEx() {

        $obj = new Dossier1();

        $obj->setDateSysChangtEx(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysChangtEx());
    }

    /**
     * Tests the setDateSysCloturePeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCloturePeriode() {

        $obj = new Dossier1();

        $obj->setDateSysCloturePeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysCloturePeriode());
    }

    /**
     * Tests the setDateSysCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCreation() {

        $obj = new Dossier1();

        $obj->setDateSysCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysCreation());
    }

    /**
     * Tests the setDateTravail() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTravail() {

        $obj = new Dossier1();

        $obj->setDateTravail(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTravail());
    }

    /**
     * Tests the setDebutExercice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExercice() {

        $obj = new Dossier1();

        $obj->setDebutExercice(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutExercice());
    }

    /**
     * Tests the setDebutExercice_1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExercice_1() {

        $obj = new Dossier1();

        $obj->setDebutExercice_1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutExercice_1());
    }

    /**
     * Tests the setDelaiLimiteSaisie() method.
     *
     * @return void
     */
    public function testSetDelaiLimiteSaisie() {

        $obj = new Dossier1();

        $obj->setDelaiLimiteSaisie(10);
        $this->assertEquals(10, $obj->getDelaiLimiteSaisie());
    }

    /**
     * Tests the setDroitCreationTypeCpt1() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt1() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt1("droitCreationTypeCpt1");
        $this->assertEquals("droitCreationTypeCpt1", $obj->getDroitCreationTypeCpt1());
    }

    /**
     * Tests the setDroitCreationTypeCpt10() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt10() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt10("droitCreationTypeCpt10");
        $this->assertEquals("droitCreationTypeCpt10", $obj->getDroitCreationTypeCpt10());
    }

    /**
     * Tests the setDroitCreationTypeCpt2() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt2() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt2("droitCreationTypeCpt2");
        $this->assertEquals("droitCreationTypeCpt2", $obj->getDroitCreationTypeCpt2());
    }

    /**
     * Tests the setDroitCreationTypeCpt3() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt3() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt3("droitCreationTypeCpt3");
        $this->assertEquals("droitCreationTypeCpt3", $obj->getDroitCreationTypeCpt3());
    }

    /**
     * Tests the setDroitCreationTypeCpt4() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt4() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt4("droitCreationTypeCpt4");
        $this->assertEquals("droitCreationTypeCpt4", $obj->getDroitCreationTypeCpt4());
    }

    /**
     * Tests the setDroitCreationTypeCpt5() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt5() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt5("droitCreationTypeCpt5");
        $this->assertEquals("droitCreationTypeCpt5", $obj->getDroitCreationTypeCpt5());
    }

    /**
     * Tests the setDroitCreationTypeCpt6() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt6() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt6("droitCreationTypeCpt6");
        $this->assertEquals("droitCreationTypeCpt6", $obj->getDroitCreationTypeCpt6());
    }

    /**
     * Tests the setDroitCreationTypeCpt7() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt7() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt7("droitCreationTypeCpt7");
        $this->assertEquals("droitCreationTypeCpt7", $obj->getDroitCreationTypeCpt7());
    }

    /**
     * Tests the setDroitCreationTypeCpt8() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt8() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt8("droitCreationTypeCpt8");
        $this->assertEquals("droitCreationTypeCpt8", $obj->getDroitCreationTypeCpt8());
    }

    /**
     * Tests the setDroitCreationTypeCpt9() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt9() {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt9("droitCreationTypeCpt9");
        $this->assertEquals("droitCreationTypeCpt9", $obj->getDroitCreationTypeCpt9());
    }

    /**
     * Tests the setDureeExercice() method.
     *
     * @return void
     */
    public function testSetDureeExercice() {

        $obj = new Dossier1();

        $obj->setDureeExercice("dureeExercice");
        $this->assertEquals("dureeExercice", $obj->getDureeExercice());
    }

    /**
     * Tests the setDureeExercice_1() method.
     *
     * @return void
     */
    public function testSetDureeExercice_1() {

        $obj = new Dossier1();

        $obj->setDureeExercice_1("dureeExercice_1");
        $this->assertEquals("dureeExercice_1", $obj->getDureeExercice_1());
    }

    /**
     * Tests the setEditDateSysteme() method.
     *
     * @return void
     */
    public function testSetEditDateSysteme() {

        $obj = new Dossier1();

        $obj->setEditDateSysteme(true);
        $this->assertEquals(true, $obj->getEditDateSysteme());
    }

    /**
     * Tests the setEditPageGarde() method.
     *
     * @return void
     */
    public function testSetEditPageGarde() {

        $obj = new Dossier1();

        $obj->setEditPageGarde(true);
        $this->assertEquals(true, $obj->getEditPageGarde());
    }

    /**
     * Tests the setEnseigne() method.
     *
     * @return void
     */
    public function testSetEnseigne() {

        $obj = new Dossier1();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Tests the setEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetEuroOuFranc() {

        $obj = new Dossier1();

        $obj->setEuroOuFranc("euroOuFranc");
        $this->assertEquals("euroOuFranc", $obj->getEuroOuFranc());
    }

    /**
     * Tests the setFamille1() method.
     *
     * @return void
     */
    public function testSetFamille1() {

        $obj = new Dossier1();

        $obj->setFamille1("famille1");
        $this->assertEquals("famille1", $obj->getFamille1());
    }

    /**
     * Tests the setFamille10() method.
     *
     * @return void
     */
    public function testSetFamille10() {

        $obj = new Dossier1();

        $obj->setFamille10("famille10");
        $this->assertEquals("famille10", $obj->getFamille10());
    }

    /**
     * Tests the setFamille2() method.
     *
     * @return void
     */
    public function testSetFamille2() {

        $obj = new Dossier1();

        $obj->setFamille2("famille2");
        $this->assertEquals("famille2", $obj->getFamille2());
    }

    /**
     * Tests the setFamille3() method.
     *
     * @return void
     */
    public function testSetFamille3() {

        $obj = new Dossier1();

        $obj->setFamille3("famille3");
        $this->assertEquals("famille3", $obj->getFamille3());
    }

    /**
     * Tests the setFamille4() method.
     *
     * @return void
     */
    public function testSetFamille4() {

        $obj = new Dossier1();

        $obj->setFamille4("famille4");
        $this->assertEquals("famille4", $obj->getFamille4());
    }

    /**
     * Tests the setFamille5() method.
     *
     * @return void
     */
    public function testSetFamille5() {

        $obj = new Dossier1();

        $obj->setFamille5("famille5");
        $this->assertEquals("famille5", $obj->getFamille5());
    }

    /**
     * Tests the setFamille6() method.
     *
     * @return void
     */
    public function testSetFamille6() {

        $obj = new Dossier1();

        $obj->setFamille6("famille6");
        $this->assertEquals("famille6", $obj->getFamille6());
    }

    /**
     * Tests the setFamille7() method.
     *
     * @return void
     */
    public function testSetFamille7() {

        $obj = new Dossier1();

        $obj->setFamille7("famille7");
        $this->assertEquals("famille7", $obj->getFamille7());
    }

    /**
     * Tests the setFamille8() method.
     *
     * @return void
     */
    public function testSetFamille8() {

        $obj = new Dossier1();

        $obj->setFamille8("famille8");
        $this->assertEquals("famille8", $obj->getFamille8());
    }

    /**
     * Tests the setFamille9() method.
     *
     * @return void
     */
    public function testSetFamille9() {

        $obj = new Dossier1();

        $obj->setFamille9("famille9");
        $this->assertEquals("famille9", $obj->getFamille9());
    }

    /**
     * Tests the setFamilleAnalytique() method.
     *
     * @return void
     */
    public function testSetFamilleAnalytique() {

        $obj = new Dossier1();

        $obj->setFamilleAnalytique("familleAnalytique");
        $this->assertEquals("familleAnalytique", $obj->getFamilleAnalytique());
    }

    /**
     * Tests the setFinExercice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExercice() {

        $obj = new Dossier1();

        $obj->setFinExercice(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinExercice());
    }

    /**
     * Tests the setFinExercice_1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExercice_1() {

        $obj = new Dossier1();

        $obj->setFinExercice_1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinExercice_1());
    }

    /**
     * Tests the setGestionComptaEco() method.
     *
     * @return void
     */
    public function testSetGestionComptaEco() {

        $obj = new Dossier1();

        $obj->setGestionComptaEco(true);
        $this->assertEquals(true, $obj->getGestionComptaEco());
    }

    /**
     * Tests the setGroupeAppClients() method.
     *
     * @return void
     */
    public function testSetGroupeAppClients() {

        $obj = new Dossier1();

        $obj->setGroupeAppClients("groupeAppClients");
        $this->assertEquals("groupeAppClients", $obj->getGroupeAppClients());
    }

    /**
     * Tests the setLRActive() method.
     *
     * @return void
     */
    public function testSetLRActive() {

        $obj = new Dossier1();

        $obj->setLRActive(true);
        $this->assertEquals(true, $obj->getLRActive());
    }

    /**
     * Tests the setLRPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLRPeriode() {

        $obj = new Dossier1();

        $obj->setLRPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getLRPeriode());
    }

    /**
     * Tests the setModuleAgrActif() method.
     *
     * @return void
     */
    public function testSetModuleAgrActif() {

        $obj = new Dossier1();

        $obj->setModuleAgrActif(true);
        $this->assertEquals(true, $obj->getModuleAgrActif());
    }

    /**
     * Tests the setMultiDossiers() method.
     *
     * @return void
     */
    public function testSetMultiDossiers() {

        $obj = new Dossier1();

        $obj->setMultiDossiers(true);
        $this->assertEquals(true, $obj->getMultiDossiers());
    }

    /**
     * Tests the setNatureMenu1() method.
     *
     * @return void
     */
    public function testSetNatureMenu1() {

        $obj = new Dossier1();

        $obj->setNatureMenu1("natureMenu1");
        $this->assertEquals("natureMenu1", $obj->getNatureMenu1());
    }

    /**
     * Tests the setNatureMenu10() method.
     *
     * @return void
     */
    public function testSetNatureMenu10() {

        $obj = new Dossier1();

        $obj->setNatureMenu10("natureMenu10");
        $this->assertEquals("natureMenu10", $obj->getNatureMenu10());
    }

    /**
     * Tests the setNatureMenu2() method.
     *
     * @return void
     */
    public function testSetNatureMenu2() {

        $obj = new Dossier1();

        $obj->setNatureMenu2("natureMenu2");
        $this->assertEquals("natureMenu2", $obj->getNatureMenu2());
    }

    /**
     * Tests the setNatureMenu3() method.
     *
     * @return void
     */
    public function testSetNatureMenu3() {

        $obj = new Dossier1();

        $obj->setNatureMenu3("natureMenu3");
        $this->assertEquals("natureMenu3", $obj->getNatureMenu3());
    }

    /**
     * Tests the setNatureMenu4() method.
     *
     * @return void
     */
    public function testSetNatureMenu4() {

        $obj = new Dossier1();

        $obj->setNatureMenu4("natureMenu4");
        $this->assertEquals("natureMenu4", $obj->getNatureMenu4());
    }

    /**
     * Tests the setNatureMenu5() method.
     *
     * @return void
     */
    public function testSetNatureMenu5() {

        $obj = new Dossier1();

        $obj->setNatureMenu5("natureMenu5");
        $this->assertEquals("natureMenu5", $obj->getNatureMenu5());
    }

    /**
     * Tests the setNatureMenu6() method.
     *
     * @return void
     */
    public function testSetNatureMenu6() {

        $obj = new Dossier1();

        $obj->setNatureMenu6("natureMenu6");
        $this->assertEquals("natureMenu6", $obj->getNatureMenu6());
    }

    /**
     * Tests the setNatureMenu7() method.
     *
     * @return void
     */
    public function testSetNatureMenu7() {

        $obj = new Dossier1();

        $obj->setNatureMenu7("natureMenu7");
        $this->assertEquals("natureMenu7", $obj->getNatureMenu7());
    }

    /**
     * Tests the setNatureMenu8() method.
     *
     * @return void
     */
    public function testSetNatureMenu8() {

        $obj = new Dossier1();

        $obj->setNatureMenu8("natureMenu8");
        $this->assertEquals("natureMenu8", $obj->getNatureMenu8());
    }

    /**
     * Tests the setNatureMenu9() method.
     *
     * @return void
     */
    public function testSetNatureMenu9() {

        $obj = new Dossier1();

        $obj->setNatureMenu9("natureMenu9");
        $this->assertEquals("natureMenu9", $obj->getNatureMenu9());
    }

    /**
     * Tests the setNatureRegle1() method.
     *
     * @return void
     */
    public function testSetNatureRegle1() {

        $obj = new Dossier1();

        $obj->setNatureRegle1("natureRegle1");
        $this->assertEquals("natureRegle1", $obj->getNatureRegle1());
    }

    /**
     * Tests the setNatureRegle10() method.
     *
     * @return void
     */
    public function testSetNatureRegle10() {

        $obj = new Dossier1();

        $obj->setNatureRegle10("natureRegle10");
        $this->assertEquals("natureRegle10", $obj->getNatureRegle10());
    }

    /**
     * Tests the setNatureRegle2() method.
     *
     * @return void
     */
    public function testSetNatureRegle2() {

        $obj = new Dossier1();

        $obj->setNatureRegle2("natureRegle2");
        $this->assertEquals("natureRegle2", $obj->getNatureRegle2());
    }

    /**
     * Tests the setNatureRegle3() method.
     *
     * @return void
     */
    public function testSetNatureRegle3() {

        $obj = new Dossier1();

        $obj->setNatureRegle3("natureRegle3");
        $this->assertEquals("natureRegle3", $obj->getNatureRegle3());
    }

    /**
     * Tests the setNatureRegle4() method.
     *
     * @return void
     */
    public function testSetNatureRegle4() {

        $obj = new Dossier1();

        $obj->setNatureRegle4("natureRegle4");
        $this->assertEquals("natureRegle4", $obj->getNatureRegle4());
    }

    /**
     * Tests the setNatureRegle5() method.
     *
     * @return void
     */
    public function testSetNatureRegle5() {

        $obj = new Dossier1();

        $obj->setNatureRegle5("natureRegle5");
        $this->assertEquals("natureRegle5", $obj->getNatureRegle5());
    }

    /**
     * Tests the setNatureRegle6() method.
     *
     * @return void
     */
    public function testSetNatureRegle6() {

        $obj = new Dossier1();

        $obj->setNatureRegle6("natureRegle6");
        $this->assertEquals("natureRegle6", $obj->getNatureRegle6());
    }

    /**
     * Tests the setNatureRegle7() method.
     *
     * @return void
     */
    public function testSetNatureRegle7() {

        $obj = new Dossier1();

        $obj->setNatureRegle7("natureRegle7");
        $this->assertEquals("natureRegle7", $obj->getNatureRegle7());
    }

    /**
     * Tests the setNatureRegle8() method.
     *
     * @return void
     */
    public function testSetNatureRegle8() {

        $obj = new Dossier1();

        $obj->setNatureRegle8("natureRegle8");
        $this->assertEquals("natureRegle8", $obj->getNatureRegle8());
    }

    /**
     * Tests the setNatureRegle9() method.
     *
     * @return void
     */
    public function testSetNatureRegle9() {

        $obj = new Dossier1();

        $obj->setNatureRegle9("natureRegle9");
        $this->assertEquals("natureRegle9", $obj->getNatureRegle9());
    }

    /**
     * Tests the setNiveauAnalytique() method.
     *
     * @return void
     */
    public function testSetNiveauAnalytique() {

        $obj = new Dossier1();

        $obj->setNiveauAnalytique(10);
        $this->assertEquals(10, $obj->getNiveauAnalytique());
    }

    /**
     * Tests the setNiveauDroit1() method.
     *
     * @return void
     */
    public function testSetNiveauDroit1() {

        $obj = new Dossier1();

        $obj->setNiveauDroit1("niveauDroit1");
        $this->assertEquals("niveauDroit1", $obj->getNiveauDroit1());
    }

    /**
     * Tests the setNiveauDroit10() method.
     *
     * @return void
     */
    public function testSetNiveauDroit10() {

        $obj = new Dossier1();

        $obj->setNiveauDroit10("niveauDroit10");
        $this->assertEquals("niveauDroit10", $obj->getNiveauDroit10());
    }

    /**
     * Tests the setNiveauDroit2() method.
     *
     * @return void
     */
    public function testSetNiveauDroit2() {

        $obj = new Dossier1();

        $obj->setNiveauDroit2("niveauDroit2");
        $this->assertEquals("niveauDroit2", $obj->getNiveauDroit2());
    }

    /**
     * Tests the setNiveauDroit3() method.
     *
     * @return void
     */
    public function testSetNiveauDroit3() {

        $obj = new Dossier1();

        $obj->setNiveauDroit3("niveauDroit3");
        $this->assertEquals("niveauDroit3", $obj->getNiveauDroit3());
    }

    /**
     * Tests the setNiveauDroit4() method.
     *
     * @return void
     */
    public function testSetNiveauDroit4() {

        $obj = new Dossier1();

        $obj->setNiveauDroit4("niveauDroit4");
        $this->assertEquals("niveauDroit4", $obj->getNiveauDroit4());
    }

    /**
     * Tests the setNiveauDroit5() method.
     *
     * @return void
     */
    public function testSetNiveauDroit5() {

        $obj = new Dossier1();

        $obj->setNiveauDroit5("niveauDroit5");
        $this->assertEquals("niveauDroit5", $obj->getNiveauDroit5());
    }

    /**
     * Tests the setNiveauDroit6() method.
     *
     * @return void
     */
    public function testSetNiveauDroit6() {

        $obj = new Dossier1();

        $obj->setNiveauDroit6("niveauDroit6");
        $this->assertEquals("niveauDroit6", $obj->getNiveauDroit6());
    }

    /**
     * Tests the setNiveauDroit7() method.
     *
     * @return void
     */
    public function testSetNiveauDroit7() {

        $obj = new Dossier1();

        $obj->setNiveauDroit7("niveauDroit7");
        $this->assertEquals("niveauDroit7", $obj->getNiveauDroit7());
    }

    /**
     * Tests the setNiveauDroit8() method.
     *
     * @return void
     */
    public function testSetNiveauDroit8() {

        $obj = new Dossier1();

        $obj->setNiveauDroit8("niveauDroit8");
        $this->assertEquals("niveauDroit8", $obj->getNiveauDroit8());
    }

    /**
     * Tests the setNiveauDroit9() method.
     *
     * @return void
     */
    public function testSetNiveauDroit9() {

        $obj = new Dossier1();

        $obj->setNiveauDroit9("niveauDroit9");
        $this->assertEquals("niveauDroit9", $obj->getNiveauDroit9());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new Dossier1();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Dossier1();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Dossier1();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setPasEcritureRB() method.
     *
     * @return void
     */
    public function testSetPasEcritureRB() {

        $obj = new Dossier1();

        $obj->setPasEcritureRB(true);
        $this->assertEquals(true, $obj->getPasEcritureRB());
    }

    /**
     * Tests the setPasModifRIBRegl() method.
     *
     * @return void
     */
    public function testSetPasModifRIBRegl() {

        $obj = new Dossier1();

        $obj->setPasModifRIBRegl(true);
        $this->assertEquals(true, $obj->getPasModifRIBRegl());
    }

    /**
     * Tests the setPeriodeCloturee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeCloturee() {

        $obj = new Dossier1();

        $obj->setPeriodeCloturee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeCloturee());
    }

    /**
     * Tests the setPeriodeValidee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeValidee() {

        $obj = new Dossier1();

        $obj->setPeriodeValidee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeValidee());
    }

    /**
     * Tests the setProchainNumPiece() method.
     *
     * @return void
     */
    public function testSetProchainNumPiece() {

        $obj = new Dossier1();

        $obj->setProchainNumPiece(10);
        $this->assertEquals(10, $obj->getProchainNumPiece());
    }

    /**
     * Tests the setRC() method.
     *
     * @return void
     */
    public function testSetRC() {

        $obj = new Dossier1();

        $obj->setRC("rC");
        $this->assertEquals("rC", $obj->getRC());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new Dossier1();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setSaisieImmoEnEcriture() method.
     *
     * @return void
     */
    public function testSetSaisieImmoEnEcriture() {

        $obj = new Dossier1();

        $obj->setSaisieImmoEnEcriture(true);
        $this->assertEquals(true, $obj->getSaisieImmoEnEcriture());
    }

    /**
     * Tests the setSauveCommun() method.
     *
     * @return void
     */
    public function testSetSauveCommun() {

        $obj = new Dossier1();

        $obj->setSauveCommun(true);
        $this->assertEquals(true, $obj->getSauveCommun());
    }

    /**
     * Tests the setSauveCompresse() method.
     *
     * @return void
     */
    public function testSetSauveCompresse() {

        $obj = new Dossier1();

        $obj->setSauveCompresse(true);
        $this->assertEquals(true, $obj->getSauveCompresse());
    }

    /**
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new Dossier1();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests the setSuiviAffTout() method.
     *
     * @return void
     */
    public function testSetSuiviAffTout() {

        $obj = new Dossier1();

        $obj->setSuiviAffTout(true);
        $this->assertEquals(true, $obj->getSuiviAffTout());
    }

    /**
     * Tests the setSuiviAna2() method.
     *
     * @return void
     */
    public function testSetSuiviAna2() {

        $obj = new Dossier1();

        $obj->setSuiviAna2("suiviAna2");
        $this->assertEquals("suiviAna2", $obj->getSuiviAna2());
    }

    /**
     * Tests the setSuiviAnaClasse0() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse0() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse0(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse0());
    }

    /**
     * Tests the setSuiviAnaClasse1() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse1() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse1(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse1());
    }

    /**
     * Tests the setSuiviAnaClasse2() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse2() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse2(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse2());
    }

    /**
     * Tests the setSuiviAnaClasse3() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse3() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse3(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse3());
    }

    /**
     * Tests the setSuiviAnaClasse4() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse4() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse4(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse4());
    }

    /**
     * Tests the setSuiviAnaClasse5() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse5() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse5(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse5());
    }

    /**
     * Tests the setSuiviAnaClasse8() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse8() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse8(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse8());
    }

    /**
     * Tests the setSuiviAnaClasse9() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse9() {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse9(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse9());
    }

    /**
     * Tests the setSuiviAnaFacultatif() method.
     *
     * @return void
     */
    public function testSetSuiviAnaFacultatif() {

        $obj = new Dossier1();

        $obj->setSuiviAnaFacultatif(true);
        $this->assertEquals(true, $obj->getSuiviAnaFacultatif());
    }

    /**
     * Tests the setTvaCle() method.
     *
     * @return void
     */
    public function testSetTvaCle() {

        $obj = new Dossier1();

        $obj->setTvaCle("tvaCle");
        $this->assertEquals("tvaCle", $obj->getTvaCle());
    }

    /**
     * Tests the setTvaCodeDossier() method.
     *
     * @return void
     */
    public function testSetTvaCodeDossier() {

        $obj = new Dossier1();

        $obj->setTvaCodeDossier("tvaCodeDossier");
        $this->assertEquals("tvaCodeDossier", $obj->getTvaCodeDossier());
    }

    /**
     * Tests the setTvaCodeRecette() method.
     *
     * @return void
     */
    public function testSetTvaCodeRecette() {

        $obj = new Dossier1();

        $obj->setTvaCodeRecette("tvaCodeRecette");
        $this->assertEquals("tvaCodeRecette", $obj->getTvaCodeRecette());
    }

    /**
     * Tests the setVentilationsCommunes() method.
     *
     * @return void
     */
    public function testSetVentilationsCommunes() {

        $obj = new Dossier1();

        $obj->setVentilationsCommunes(true);
        $this->assertEquals(true, $obj->getVentilationsCommunes());
    }
}
