<?php namespace Util;
require_once 'DateException.php';
final class Date
{
    private $day, $month, $year;
    private static $MONTHS = array("jan", "feb", "maa", "apr", "mei", "jun", "jul", "aug", "sep", "okt",
        "nov", "dec");

    private function __construct($day = 1, $month = 1, $year = 2008)
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

    public function changeDay($day)
    {
        return new self($day, $this->month, $this->year);
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function changeMonth($month)
    {
        return new self($this->day, $month, $this->year);
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function changeYear($year)
    {
        return new self($this->day, $this->month, $year);
    }

    static function make($day = 1, $month = 1, $year = 2008)
    {
        if ($day > 31 || $day < 0 || $month > 12 || $month < 0) {
            throw new DateException("Invalid date");
        }
            return new self($day, $month, $year);
    }
}
