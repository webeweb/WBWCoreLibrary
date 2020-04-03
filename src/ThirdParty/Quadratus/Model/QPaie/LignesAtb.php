<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes atb.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAtb {

    /**
     * Date versement.
     *
     * @var DateTime|null
     */
    private $dateVersement;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Montant cotis.
     *
     * @var float
     */
    private $montantCotis;

    /**
     * Montant euro ou franc.
     *
     * @var string
     */
    private $montantEuroOuFranc;

    /**
     * Num ligne.
     *
     * @var string
     */
    private $numLigne;

    /**
     * Numero attestation.
     *
     * @var string
     */
    private $numeroAttestation;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Ps euro ou franc.
     *
     * @var string
     */
    private $psEuroOuFranc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date versement.
     *
     * @return DateTime|null Returns the date versement.
     */
    public function getDateVersement() {
        return $this->dateVersement;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the montant cotis.
     *
     * @return float Returns the montant cotis.
     */
    public function getMontantCotis() {
        return $this->montantCotis;
    }

    /**
     * Get the montant euro ou franc.
     *
     * @return string Returns the montant euro ou franc.
     */
    public function getMontantEuroOuFranc() {
        return $this->montantEuroOuFranc;
    }

    /**
     * Get the num ligne.
     *
     * @return string Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the numero attestation.
     *
     * @return string Returns the numero attestation.
     */
    public function getNumeroAttestation() {
        return $this->numeroAttestation;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the ps euro ou franc.
     *
     * @return string Returns the ps euro ou franc.
     */
    public function getPsEuroOuFranc() {
        return $this->psEuroOuFranc;
    }

    /**
     * Set the date versement.
     *
     * @param DateTime|null $dateVersement The date versement.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setDateVersement(DateTime $dateVersement = null) {
        $this->dateVersement = $dateVersement;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant cotis.
     *
     * @param float $montantCotis The montant cotis.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontantCotis($montantCotis) {
        $this->montantCotis = $montantCotis;
        return $this;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string $montantEuroOuFranc The montant euro ou franc.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setMontantEuroOuFranc($montantEuroOuFranc) {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the ps euro ou franc.
     *
     * @param string $psEuroOuFranc The ps euro ou franc.
     * @return LignesAtb Returns this Lignes atb.
     */
    public function setPsEuroOuFranc($psEuroOuFranc) {
        $this->psEuroOuFranc = $psEuroOuFranc;
        return $this;
    }
}
