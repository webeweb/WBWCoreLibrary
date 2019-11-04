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
 * Reduction mayotte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReductionMayotteTrait {

    /**
     * Reduction mayotte.
     *
     * @var bool
     */
    private $reductionMayotte;

    /**
     * Get the reduction mayotte.
     *
     * @return bool Returns the reduction mayotte.
     */
    public function getReductionMayotte() {
        return $this->reductionMayotte;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param bool $reductionMayotte The reduction mayotte.
     */
    public function setReductionMayotte($reductionMayotte) {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }
}