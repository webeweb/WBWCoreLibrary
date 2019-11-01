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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Employes;

/**
 * Employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmployesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Employes();

        $this->assertNull($obj->getATransfererEnP());
        $this->assertNull($obj->getAdministratif());
        $this->assertNull($obj->getAllegParticulier());
        $this->assertNull($obj->getAutreAlleg());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCalculParticip());
        $this->assertNull($obj->getCarteSejourDelivreeLe());
        $this->assertNull($obj->getCarteSejourExpireLe());
        $this->assertNull($obj->getCarteTravailDelivreeLe());
        $this->assertNull($obj->getCarteTravailExpireLe());
        $this->assertNull($obj->getCasPartSs());
        $this->assertNull($obj->getCategPopulation());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCategoriePermis());
        $this->assertNull($obj->getClassification());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeCentreUrssaf());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePaysNaissance());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeTypeSal());
        $this->assertNull($obj->getCommuneNaissance());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteTiers());
        $this->assertNull($obj->getCptAccompte());
        $this->assertNull($obj->getCtrlTauxSalBase());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumBaseCsg());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBaseTrA());
        $this->assertNull($obj->getCumBaseTrACaisse1());
        $this->assertNull($obj->getCumBaseTrACaisse2());
        $this->assertNull($obj->getCumBaseTrACaisse3());
        $this->assertNull($obj->getCumBaseTrB());
        $this->assertNull($obj->getCumBaseTrBCaisse1());
        $this->assertNull($obj->getCumBaseTrBCaisse2());
        $this->assertNull($obj->getCumBaseTrBCaisse3());
        $this->assertNull($obj->getCumBaseTrC());
        $this->assertNull($obj->getCumBaseTrCCaisse1());
        $this->assertNull($obj->getCumBaseTrCCaisse2());
        $this->assertNull($obj->getCumBaseTrCCaisse3());
        $this->assertNull($obj->getCumBrutAbatNonLim());
        $this->assertNull($obj->getCumBrutNonAbattu());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumCpDus());
        $this->assertNull($obj->getCumCpDus1());
        $this->assertNull($obj->getCumCpPris());
        $this->assertNull($obj->getCumCpPris1());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumHSup());
        $this->assertNull($obj->getCumHSupRcit());
        $this->assertNull($obj->getCumHeurePaye());
        $this->assertNull($obj->getCumHeureTrav());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumJourPaye());
        $this->assertNull($obj->getCumJourTrav());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumNetImposable());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumPlafondSs1());
        $this->assertNull($obj->getCumPlafondSs2());
        $this->assertNull($obj->getCumProvCp());
        $this->assertNull($obj->getCumProvCp1());
        $this->assertNull($obj->getCumReposComp());
        $this->assertNull($obj->getDateAncien());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateEntree1());
        $this->assertNull($obj->getDateEntree2());
        $this->assertNull($obj->getDateLicenciement());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNaissConjoint());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateSortie1());
        $this->assertNull($obj->getDateSortie2());
        $this->assertNull($obj->getDateVisiteMedicale());
        $this->assertNull($obj->getDateVisiteReprise());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDernNumPrime());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getDirNonSalarie());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEdTauxSalBase());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifDas());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJf());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getGrilleAnc1());
        $this->assertNull($obj->getGrilleAnc2());
        $this->assertNull($obj->getGrilleAnc3());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHandicape());
        $this->assertNull($obj->getLieuTravailConjoint());
        $this->assertNull($obj->getMatricule());
        $this->assertNull($obj->getMensualisationTache());
        $this->assertNull($obj->getMentionCp());
        $this->assertNull($obj->getMinGaranti());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMontantAvantage());
        $this->assertNull($obj->getMtBaseAcompte());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNbHeureSal());
        $this->assertNull($obj->getNbHeureSup());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNbPoints());
        $this->assertNull($obj->getNiveauConfidentialite());
        $this->assertNull($obj->getNomConjoint());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEnfants());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCarteSejour());
        $this->assertNull($obj->getNumeroCarteTravail());
        $this->assertNull($obj->getNumeroCasPartSecu());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getNumeroInsee());
        $this->assertNull($obj->getNumeroPermis());
        $this->assertNull($obj->getOrphelin());
        $this->assertNull($obj->getPasGestionPdp());
        $this->assertNull($obj->getPasGestionPdp1());
        $this->assertNull($obj->getPension());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPermisDelivreLe());
        $this->assertNull($obj->getPermisDelivrePar());
        $this->assertNull($obj->getPermisExpireLe());
        $this->assertNull($obj->getPersonneAPrevenir());
        $this->assertNull($obj->getPlafondGmp());
        $this->assertNull($obj->getPlafondSs1());
        $this->assertNull($obj->getPlafondSs30());
        $this->assertNull($obj->getPourcentAbat());
        $this->assertNull($obj->getPourcentAct());
        $this->assertNull($obj->getPourcentEffectifDucs());
        $this->assertNull($obj->getPourcentRemuHor());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPrenomConjoint());
        $this->assertNull($obj->getPrime());
        $this->assertNull($obj->getPrudCollege());
        $this->assertNull($obj->getPrudLieuVote());
        $this->assertNull($obj->getPrudSection());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegroupVirement());
        $this->assertNull($obj->getRegulTds());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSalaireBase());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTds100());
        $this->assertNull($obj->getTds102());
        $this->assertNull($obj->getTds103());
        $this->assertNull($obj->getTds105());
        $this->assertNull($obj->getTds107());
        $this->assertNull($obj->getTds108());
        $this->assertNull($obj->getTds109());
        $this->assertNull($obj->getTds110());
        $this->assertNull($obj->getTds112());
        $this->assertNull($obj->getTds113());
        $this->assertNull($obj->getTds117());
        $this->assertNull($obj->getTds119());
        $this->assertNull($obj->getTds120());
        $this->assertNull($obj->getTds121());
        $this->assertNull($obj->getTds122());
        $this->assertNull($obj->getTds125());
        $this->assertNull($obj->getTds127());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds132());
        $this->assertNull($obj->getTds133());
        $this->assertNull($obj->getTds134());
        $this->assertNull($obj->getTds135());
        $this->assertNull($obj->getTds136());
        $this->assertNull($obj->getTds138());
        $this->assertNull($obj->getTds139());
        $this->assertNull($obj->getTds141());
        $this->assertNull($obj->getTds59());
        $this->assertNull($obj->getTds60());
        $this->assertNull($obj->getTds61());
        $this->assertNull($obj->getTds75());
        $this->assertNull($obj->getTds76());
        $this->assertNull($obj->getTds77());
        $this->assertNull($obj->getTds78());
        $this->assertNull($obj->getTds81());
        $this->assertNull($obj->getTds82());
        $this->assertNull($obj->getTds84());
        $this->assertNull($obj->getTds85());
        $this->assertNull($obj->getTds86());
        $this->assertNull($obj->getTds87());
        $this->assertNull($obj->getTds88());
        $this->assertNull($obj->getTds89());
        $this->assertNull($obj->getTds90());
        $this->assertNull($obj->getTds91());
        $this->assertNull($obj->getTds92());
        $this->assertNull($obj->getTds93());
        $this->assertNull($obj->getTds94());
        $this->assertNull($obj->getTds95());
        $this->assertNull($obj->getTaux1());
        $this->assertNull($obj->getTaux2());
        $this->assertNull($obj->getTaux3());
        $this->assertNull($obj->getTaux4());
        $this->assertNull($obj->getTaux5());
        $this->assertNull($obj->getTauxAbsence());
        $this->assertNull($obj->getTauxAncien());
        $this->assertNull($obj->getTauxHSup());
        $this->assertNull($obj->getTauxPensionCivile());
        $this->assertNull($obj->getTauxPensionMilitaire());
        $this->assertNull($obj->getTaxeSalaire());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTelConjoint());
        $this->assertNull($obj->getTelPersAPrevenir());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTransfertEntree1());
        $this->assertNull($obj->getTransfertEntree2());
        $this->assertNull($obj->getTransfertSortie1());
        $this->assertNull($obj->getTransfertSortie2());
        $this->assertNull($obj->getTravailleJf());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeNationalite());
        $this->assertNull($obj->getTypePaiement());
        $this->assertNull($obj->getVrpMulticarte());
        $this->assertNull($obj->getplafondSs2());
    }
}
