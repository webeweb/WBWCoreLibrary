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
 * Version trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVersionTrait {

    /**
     * Version.
     *
     * @var int
     */
    private $version;

    /**
     * Get the version.
     *
     * @return int Returns the version.
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Set the version.
     *
     * @param int $version The version.
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }
}
