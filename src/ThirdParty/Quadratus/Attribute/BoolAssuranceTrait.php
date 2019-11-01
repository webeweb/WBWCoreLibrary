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

/**
 * Assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAssuranceTrait {

    /**
     * Assurance.
     *
     * @var bool
     */
    private $assurance;

    /**
     * Get the assurance.
     *
     * @return bool Returns the assurance.
     */
    public function getAssurance() {
        return $this->assurance;
    }

    /**
     * Set the assurance.
     *
     * @param bool $assurance The assurance.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }
}
