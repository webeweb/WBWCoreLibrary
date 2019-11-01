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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantPointeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptPayeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDossTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;

/**
 * Pointage reglements lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsLignes {

    use FloatMontantPointeTrait;
    use StringNumCptPayeurTrait;
    use StringNumDossTrait;
    use IntNumLigneTrait;
    use IntNumUniqEcrTrait;
    use StringNumeroCompteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
