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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCaisseCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSortieMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemunAssietteCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemunBrutCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSmicMciceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Emp recap cicemsa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCicemsa {

    use BoolCaisseCpTrait;
    use IntCodeEtablissementTrait;
    use StringCodeUniteTrait;
    use IntIndicePeriodeTrait;
    use StringNomEmployeTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatRemunAssietteCiceTrait;
    use FloatRemunBrutCiceTrait;
    use FloatSmicMciceTrait;
    use BoolSortieMoisTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
