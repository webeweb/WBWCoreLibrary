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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringActivitePrincipaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Sous famille article.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SousFamilleArticle {

    use StringActivitePrincipaleTrait;
    use StringCodeTrait;
    use StringLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
