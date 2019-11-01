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
 * Chrono trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntChronoTrait {

    /**
     * Chrono.
     *
     * @var int
     */
    private $chrono;

    /**
     * Get the chrono.
     *
     * @return int Returns the chrono.
     */
    public function getChrono() {
        return $this->chrono;
    }

    /**
     * Set the chrono.
     *
     * @param int $chrono The chrono.
     */
    public function setChrono($chrono) {
        $this->chrono = $chrono;
        return $this;
    }
}
