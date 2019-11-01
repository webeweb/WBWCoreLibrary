<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantRestantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantVirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptCarTrait;

/**
 * Charges a repartir lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesARepartirLignes {

    use StringAnneeTrait;
    use FloatMontantRestantTrait;
    use FloatMontantVirTrait;
    use StringNumContratTrait;
    use StringNumCptCarTrait;
    use IntNumLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
