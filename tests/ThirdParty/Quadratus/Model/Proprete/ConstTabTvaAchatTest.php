<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ConstTabTvaAchat;

/**
 * Const tab tva achat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabTvaAchatTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstTabTvaAchat();

        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeTvaFourn());
        $this->assertNull($obj->getCompteTva());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTauxTva());
    }
}
