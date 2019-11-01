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
 * Numero lettre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroLettreTrait {

    /**
     * Numero lettre.
     *
     * @var string
     */
    private $numeroLettre;

    /**
     * Get the numero lettre.
     *
     * @return string Returns the numero lettre.
     */
    public function getNumeroLettre() {
        return $this->numeroLettre;
    }

    /**
     * Set the numero lettre.
     *
     * @param string $numeroLettre The numero lettre.
     */
    public function setNumeroLettre($numeroLettre) {
        $this->numeroLettre = $numeroLettre;
        return $this;
    }
}
