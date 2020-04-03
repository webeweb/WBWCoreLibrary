<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Commissaires comptes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CommissairesComptes {

    /**
     * Code cac.
     *
     * @var string
     */
    private $codeCac;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Date nomination.
     *
     * @var DateTime|null
     */
    private $dateNomination;

    /**
     * Duree mandat.
     *
     * @var int
     */
    private $dureeMandat;

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Position.
     *
     * @var int
     */
    private $position;

    /**
     * Titulaire.
     *
     * @var bool
     */
    private $titulaire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code cac.
     *
     * @return string Returns the code cac.
     */
    public function getCodeCac() {
        return $this->codeCac;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the date nomination.
     *
     * @return DateTime|null Returns the date nomination.
     */
    public function getDateNomination() {
        return $this->dateNomination;
    }

    /**
     * Get the duree mandat.
     *
     * @return int Returns the duree mandat.
     */
    public function getDureeMandat() {
        return $this->dureeMandat;
    }

    /**
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
    }

    /**
     * Get the position.
     *
     * @return int Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the titulaire.
     *
     * @return bool Returns the titulaire.
     */
    public function getTitulaire() {
        return $this->titulaire;
    }

    /**
     * Set the code cac.
     *
     * @param string $codeCac The code cac.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setCodeCac($codeCac) {
        $this->codeCac = $codeCac;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime|null $dateNomination The date nomination.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setDateNomination(DateTime $dateNomination = null) {
        $this->dateNomination = $dateNomination;
        return $this;
    }

    /**
     * Set the duree mandat.
     *
     * @param int $dureeMandat The duree mandat.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setDureeMandat($dureeMandat) {
        $this->dureeMandat = $dureeMandat;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int $position The position.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the titulaire.
     *
     * @param bool $titulaire The titulaire.
     * @return CommissairesComptes Returns this Commissaires comptes.
     */
    public function setTitulaire($titulaire) {
        $this->titulaire = $titulaire;
        return $this;
    }
}
