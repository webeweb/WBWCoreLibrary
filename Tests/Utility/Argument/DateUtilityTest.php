<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\Argument;

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\Argument\DateUtility;

/**
 * Date utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Argument
 * @final
 */
final class DateUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getDayNumber() method.
     *
     * @return void
     */
    public function testGetDayNumber() {

        $this->assertEquals(1, DateUtility::getDayNumber(new DateTime("2018-05-21")));
        $this->assertEquals(2, DateUtility::getDayNumber(new DateTime("2018-05-22")));
        $this->assertEquals(3, DateUtility::getDayNumber(new DateTime("2018-05-23")));
        $this->assertEquals(4, DateUtility::getDayNumber(new DateTime("2018-05-24")));
        $this->assertEquals(5, DateUtility::getDayNumber(new DateTime("2018-05-25")));
        $this->assertEquals(6, DateUtility::getDayNumber(new DateTime("2018-05-26")));
        $this->assertEquals(7, DateUtility::getDayNumber(new DateTime("2018-05-27")));
    }

    /**
     * Tests the getWeekNumber() method.
     *
     * @return void
     */
    public function testGetWeekNumber() {

        $this->assertEquals(1, DateUtility::getWeekNumber(new DateTime("2018-01-01")));
        $this->assertEquals(52, DateUtility::getWeekNumber(new DateTime("2018-12-30")));
        $this->assertEquals(1, DateUtility::getWeekNumber(new DateTime("2018-12-31")));

        $this->assertEquals(18, DateUtility::getWeekNumber(new DateTime("2018-05-01")));
        $this->assertEquals(19, DateUtility::getWeekNumber(new DateTime("2018-05-08")));
        $this->assertEquals(20, DateUtility::getWeekNumber(new DateTime("2018-05-15")));
        $this->assertEquals(21, DateUtility::getWeekNumber(new DateTime("2018-05-22")));
        $this->assertEquals(22, DateUtility::getWeekNumber(new DateTime("2018-05-29")));
    }

    /**
     * Tests the translateWeekday() method.
     *
     * @return void
     */
    public function testTranslateWeekday() {

        $arg = [];
        for ($i = 0; $i < 7; ++$i) {
            $arg[] = new DateTime("2018-04-" . ($i + 8));
        }

        $res   = [];
        $res[] = "Dimanche, 2018-04-08";
        $res[] = "Lundi, 2018-04-09";
        $res[] = "Mardi, 2018-04-10";
        $res[] = "Mercredi, 2018-04-11";
        $res[] = "Jeudi, 2018-04-12";
        $res[] = "Vendredi, 2018-04-13";
        $res[] = "Samedi, 2018-04-14";

        for ($i = 0; $i < 7; ++$i) {
            $this->assertEquals($res[$i], DateUtility::translateWeekDay($arg[$i]->format("l, Y-m-d"), DateUtility::getWeekdayFR()));
        }
    }

}