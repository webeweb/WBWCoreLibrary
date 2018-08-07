<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper\Argument;

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Helper\Argument\DateTimeHelper;

/**
 * Date/time helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class DateTimeHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the compare() method.
     *
     * @return void
     */
    public function testCompare() {

        $this->assertEquals(-1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertEquals(0, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertEquals(1, DateTimeHelper::compare(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests the equals() method.
     *
     * @return void
     */
    public function testEquals() {

        $this->assertTrue(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:00")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:00"), new DateTime("2018-08-06 15:20:01")));
        $this->assertFalse(DateTimeHelper::equals(new DateTime("2018-08-06 15:20:01"), new DateTime("2018-08-06 15:20:00")));
    }

    /**
     * Tests the getDayNumber() method.
     *
     * @return void
     */
    public function testGetDayNumber() {

        $this->assertEquals(1, DateTimeHelper::getDayNumber(new DateTime("2018-05-21")));
        $this->assertEquals(2, DateTimeHelper::getDayNumber(new DateTime("2018-05-22")));
        $this->assertEquals(3, DateTimeHelper::getDayNumber(new DateTime("2018-05-23")));
        $this->assertEquals(4, DateTimeHelper::getDayNumber(new DateTime("2018-05-24")));
        $this->assertEquals(5, DateTimeHelper::getDayNumber(new DateTime("2018-05-25")));
        $this->assertEquals(6, DateTimeHelper::getDayNumber(new DateTime("2018-05-26")));
        $this->assertEquals(7, DateTimeHelper::getDayNumber(new DateTime("2018-05-27")));
    }

    /**
     * Tests the getMonthNumber() method.
     *
     * @return void
     */
    public function testGetMonthNumber() {

        $this->assertEquals(1, DateTimeHelper::getMonthNumber(new DateTime("2018-01-01")));
        $this->assertEquals(2, DateTimeHelper::getMonthNumber(new DateTime("2018-02-01")));
        $this->assertEquals(3, DateTimeHelper::getMonthNumber(new DateTime("2018-03-01")));
        $this->assertEquals(4, DateTimeHelper::getMonthNumber(new DateTime("2018-04-01")));
        $this->assertEquals(5, DateTimeHelper::getMonthNumber(new DateTime("2018-05-01")));
        $this->assertEquals(6, DateTimeHelper::getMonthNumber(new DateTime("2018-06-01")));
        $this->assertEquals(7, DateTimeHelper::getMonthNumber(new DateTime("2018-07-01")));
        $this->assertEquals(8, DateTimeHelper::getMonthNumber(new DateTime("2018-08-01")));
        $this->assertEquals(9, DateTimeHelper::getMonthNumber(new DateTime("2018-09-01")));
        $this->assertEquals(10, DateTimeHelper::getMonthNumber(new DateTime("2018-10-01")));
        $this->assertEquals(11, DateTimeHelper::getMonthNumber(new DateTime("2018-11-01")));
        $this->assertEquals(12, DateTimeHelper::getMonthNumber(new DateTime("2018-12-01")));
    }

    /**
     * Tests the getWeekNumber() method.
     *
     * @return void
     */
    public function testGetWeekNumber() {

        $this->assertEquals(1, DateTimeHelper::getWeekNumber(new DateTime("2018-01-01")));
        $this->assertEquals(52, DateTimeHelper::getWeekNumber(new DateTime("2018-12-30")));
        $this->assertEquals(1, DateTimeHelper::getWeekNumber(new DateTime("2018-12-31")));

        $this->assertEquals(18, DateTimeHelper::getWeekNumber(new DateTime("2018-05-01")));
        $this->assertEquals(19, DateTimeHelper::getWeekNumber(new DateTime("2018-05-08")));
        $this->assertEquals(20, DateTimeHelper::getWeekNumber(new DateTime("2018-05-15")));
        $this->assertEquals(21, DateTimeHelper::getWeekNumber(new DateTime("2018-05-22")));
        $this->assertEquals(22, DateTimeHelper::getWeekNumber(new DateTime("2018-05-29")));
    }

    /**
     * Tests the getYearNumber() method.
     *
     * @return void
     */
    public function testGetYearNumber() {

        $this->assertEquals(1900, DateTimeHelper::getYearNumber(new DateTime("1900-05-21")));
        $this->assertEquals(1970, DateTimeHelper::getYearNumber(new DateTime("1970-05-22")));
        $this->assertEquals(2000, DateTimeHelper::getYearNumber(new DateTime("2000-05-23")));
        $this->assertEquals(2018, DateTimeHelper::getYearNumber(new DateTime("2018-05-24")));
    }

}