<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroGrilleTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Entete grilles type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EnteteGrillesType {

    use StringIntituleTrait;
    use IntNumeroGrilleTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
