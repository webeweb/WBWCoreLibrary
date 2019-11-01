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
 * Num lot cli douteux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotCliDouteuxTrait {

    /**
     * Num lot cli douteux.
     *
     * @var int
     */
    private $numLotCliDouteux;

    /**
     * Get the num lot cli douteux.
     *
     * @return int Returns the num lot cli douteux.
     */
    public function getNumLotCliDouteux() {
        return $this->numLotCliDouteux;
    }

    /**
     * Set the num lot cli douteux.
     *
     * @param int $numLotCliDouteux The num lot cli douteux.
     */
    public function setNumLotCliDouteux($numLotCliDouteux) {
        $this->numLotCliDouteux = $numLotCliDouteux;
        return $this;
    }
}
