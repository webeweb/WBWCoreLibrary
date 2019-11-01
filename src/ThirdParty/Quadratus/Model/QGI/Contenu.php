<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteContenuTrait;

/**
 * Contenu.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Contenu {

    use IntPositionTrait;
    use StringTexteContenuTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
