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
 * Gestion repos remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionReposRemplaceTrait {

    /**
     * Gestion repos remplace.
     *
     * @var string
     */
    private $gestionReposRemplace;

    /**
     * Get the gestion repos remplace.
     *
     * @return string Returns the gestion repos remplace.
     */
    public function getGestionReposRemplace() {
        return $this->gestionReposRemplace;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param string $gestionReposRemplace The gestion repos remplace.
     */
    public function setGestionReposRemplace($gestionReposRemplace) {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }
}
