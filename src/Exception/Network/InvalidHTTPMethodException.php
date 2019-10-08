<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Network;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Invalid HTTP method exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\IO
 */
class InvalidHTTPMethodException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $method The method.
     * @param Exception $previous The previous exception.
     */
    public function __construct($method, Exception $previous = null) {
        parent::__construct(sprintf("The HTTP method \"%s\" is invalid", $method), 500, $previous);
    }
}
