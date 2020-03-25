<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Provider;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Provider\OcrProvider;

/**
 * OCR provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Provider
 */
class OcrProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new OcrProvider($this->logger);

        $this->assertNull($obj->getHostname());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUsername());

        $this->assertNull($obj->getLocalDirectoryAfter());
        $this->assertNull($obj->getLocalDirectoryBefore());
        $this->assertNull($obj->getLocalDirectoryError());
        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertEquals("/Apres", $obj->getRemoteDirectoryAfter());
        $this->assertEquals("/Avant", $obj->getRemoteDirectoryBefore());
        $this->assertEquals("/Erreur", $obj->getRemoteDirectoryError());
    }

    /**
     * Tests the setLocalDirectoryAfter() method.
     *
     * @return void
     */
    public function testSetLocalDirectoryAfter() {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryAfter("localDirectoryAfter");
        $this->assertEquals("localDirectoryAfter", $obj->getLocalDirectoryAfter());
    }

    /**
     * Tests the setLocalDirectoryBefore() method.
     *
     * @return void
     */
    public function testSetLocalDirectoryBefore() {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryBefore("localDirectoryBefore");
        $this->assertEquals("localDirectoryBefore", $obj->getLocalDirectoryBefore());
    }

    /**
     * Tests the setLocalDirectoryError() method.
     *
     * @return void
     */
    public function testSetLocalDirectoryError() {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryError("localDirectoryError");
        $this->assertEquals("localDirectoryError", $obj->getLocalDirectoryError());
    }

    /**
     * Tests the setRemoteDirectoryAfter() method.
     *
     * @return void
     */
    public function testSetRemoteDirectoryAfter() {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryAfter("remoteDirectoryAfter");
        $this->assertEquals("remoteDirectoryAfter", $obj->getRemoteDirectoryAfter());
    }

    /**
     * Tests the setRemoteDirectoryBefore() method.
     *
     * @return void
     */
    public function testSetRemoteDirectoryBefore() {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryBefore("remoteDirectoryBefore");
        $this->assertEquals("remoteDirectoryBefore", $obj->getRemoteDirectoryBefore());
    }

    /**
     * Tests the setRemoteDirectoryError() method.
     *
     * @return void
     */
    public function testSetRemoteDirectoryError() {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryError("remoteDirectoryError");
        $this->assertEquals("remoteDirectoryError", $obj->getRemoteDirectoryError());
    }
}