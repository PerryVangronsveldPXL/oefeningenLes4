<?php namespace Util;

final class Date
{
    private $day, $month, $year;
    private static $MONTHS = array("jan", "feb", "maa", "apr", "mei", "jun", "jul", "aug", "sep", "okt",
        "nov", "dec");

    public function __construct($day = 1, $month = 1, $year = 2008)
    {
        if (!$day) {
            $day = 1;
        }
        if (!$month) {
            $month = 1;
        }
        if (!$year) {
            $year = 2008;
        }
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function print()
    {
        print ($this->day . '/' . $this->month . '/' . $this->year);
    }

    public function printMonth()
    {
        print ($this->day . '/' . self::$MONTHS[$this->month - 1] . '/' . $this->year);
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }
}
