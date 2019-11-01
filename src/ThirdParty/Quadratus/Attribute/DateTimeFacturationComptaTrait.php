<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

use DateTime;

/**
 * Facturation compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFacturationComptaTrait {

    /**
     * Facturation compta.
     *
     * @var DateTime|null
     */
    private $facturationCompta;

    /**
     * Get the facturation compta.
     *
     * @return DateTime|null Returns the facturation compta.
     */
    public function getFacturationCompta() {
        return $this->facturationCompta;
    }

    /**
     * Set the facturation compta.
     *
     * @param DateTime|null $facturationCompta The facturation compta.
     */
    public function setFacturationCompta(DateTime $facturationCompta = null) {
        $this->facturationCompta = $facturationCompta;
        return $this;
    }
}
