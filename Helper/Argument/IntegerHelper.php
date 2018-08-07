<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper\Argument;

use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Helper\Database\PaginateHelper;

/**
 * Integer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Helper\Argument
 */
class IntegerHelper {

    /**
     * Get a lines limit.
     *
     * @param integer $pageNumber The page number.
     * @param integer $divider The divider.
     * @param integer $total The total.
     * @return integer[] Returns the offset and limit in case of success, -1 otherwise.
     * @deprecated
     */
    public static function getLinesLimit($pageNumber, $divider, $total = -1) {
        return PaginateHelper::getPageOffsetAndLimit($pageNumber, $divider, $total);
    }

    /**
     * Get a pages count.
     *
     * @param integer $linesNumber The lines number.
     * @param integer $divider The divider.
     * @return integer Returns the pages count in case of success, -1 otherwise.
     * @deprecated
     */
    public static function getPagesCount($linesNumber, $divider) {
        return PaginateHelper::getPagesCount($linesNumber, $divider);
    }

    /**
     * Determines if a value is an integer.
     *
     * @param mixed $value The value.
     * @throws IntegerArgumentException Throws a Integer argument exception if the value is not of expected type.
     */
    public static function isInteger($value) {
        if (false === is_integer($value)) {
            throw new IntegerArgumentException($value);
        }
    }

    /**
     * Parse a boolean.
     *
     * @param boolean $value The boolean value.
     * @return integer Returns 1 in case of success, 0 otherwise.
     */
    public static function parseBoolean($value) {
        return $value === true ? 1 : 0;
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return integer Returns the integer represented by the string value..
     * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
     */
    public static function parseString($value) {
        if (null === $value) {
            return null;
        }
        if (0 === preg_match("/^[0-9]{1,}$/", $value)) {
            throw new IntegerArgumentException($value);
        }
        return intval($value);
    }

}