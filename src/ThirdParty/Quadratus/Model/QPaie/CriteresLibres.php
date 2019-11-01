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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte9Trait;

/**
 * Criteres libres.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CriteresLibres {

    use BoolCase1Trait;
    use BoolCase10Trait;
    use BoolCase11Trait;
    use BoolCase12Trait;
    use BoolCase13Trait;
    use BoolCase14Trait;
    use BoolCase15Trait;
    use BoolCase16Trait;
    use BoolCase17Trait;
    use BoolCase18Trait;
    use BoolCase19Trait;
    use BoolCase2Trait;
    use BoolCase20Trait;
    use BoolCase3Trait;
    use BoolCase4Trait;
    use BoolCase5Trait;
    use BoolCase6Trait;
    use BoolCase7Trait;
    use BoolCase8Trait;
    use BoolCase9Trait;
    use DateTimeDate1Trait;
    use DateTimeDate10Trait;
    use DateTimeDate11Trait;
    use DateTimeDate12Trait;
    use DateTimeDate13Trait;
    use DateTimeDate14Trait;
    use DateTimeDate15Trait;
    use DateTimeDate16Trait;
    use DateTimeDate17Trait;
    use DateTimeDate18Trait;
    use DateTimeDate19Trait;
    use DateTimeDate2Trait;
    use DateTimeDate20Trait;
    use DateTimeDate3Trait;
    use DateTimeDate4Trait;
    use DateTimeDate5Trait;
    use DateTimeDate6Trait;
    use DateTimeDate7Trait;
    use DateTimeDate8Trait;
    use DateTimeDate9Trait;
    use StringNumeroEmployeTrait;
    use StringTexte1Trait;
    use StringTexte10Trait;
    use StringTexte11Trait;
    use StringTexte12Trait;
    use StringTexte13Trait;
    use StringTexte14Trait;
    use StringTexte15Trait;
    use StringTexte16Trait;
    use StringTexte17Trait;
    use StringTexte18Trait;
    use StringTexte19Trait;
    use StringTexte2Trait;
    use StringTexte20Trait;
    use StringTexte3Trait;
    use StringTexte4Trait;
    use StringTexte5Trait;
    use StringTexte6Trait;
    use StringTexte7Trait;
    use StringTexte8Trait;
    use StringTexte9Trait;
    use FloatValeur1Trait;
    use FloatValeur10Trait;
    use FloatValeur11Trait;
    use FloatValeur12Trait;
    use FloatValeur13Trait;
    use FloatValeur14Trait;
    use FloatValeur15Trait;
    use FloatValeur16Trait;
    use FloatValeur17Trait;
    use FloatValeur18Trait;
    use FloatValeur19Trait;
    use FloatValeur2Trait;
    use FloatValeur20Trait;
    use FloatValeur3Trait;
    use FloatValeur4Trait;
    use FloatValeur5Trait;
    use FloatValeur6Trait;
    use FloatValeur7Trait;
    use FloatValeur8Trait;
    use FloatValeur9Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
