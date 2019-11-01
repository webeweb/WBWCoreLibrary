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
 * Type contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeContratTrait {

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Get the type contrat.
     *
     * @return string Returns the type contrat.
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }
}
