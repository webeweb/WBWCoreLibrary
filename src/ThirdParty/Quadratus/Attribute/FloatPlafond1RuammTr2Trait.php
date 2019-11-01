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
 * Plafond1 ruamm tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond1RuammTr2Trait {

    /**
     * Plafond1 ruamm tr2.
     *
     * @var float
     */
    private $plafond1RuammTr2;

    /**
     * Get the plafond1 ruamm tr2.
     *
     * @return float Returns the plafond1 ruamm tr2.
     */
    public function getPlafond1RuammTr2() {
        return $this->plafond1RuammTr2;
    }

    /**
     * Set the plafond1 ruamm tr2.
     *
     * @param float $plafond1RuammTr2 The plafond1 ruamm tr2.
     */
    public function setPlafond1RuammTr2($plafond1RuammTr2) {
        $this->plafond1RuammTr2 = $plafond1RuammTr2;
        return $this;
    }
}
