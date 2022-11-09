<?php

class Date{
    public int $day;
    public int $month;
    public int $year;

    function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    function setDay(int $newDay): void{
        $this->day = $newDay;
    }

    function getDay(): int{
        return $this->day;
    }

    function setMonth(int $newMonth): void{
        $this->month = $newMonth;
    }

    function getMonth(): int{
        return $this->month;
    }

    function setYear(int $newYear): void{
        $this->year = $newYear;
    }

    function getYear(): int {
        return $this->year;
    }

    function displayDate(): string{
        return $this->getDay()."/".$this->getMonth()."/".$this->getYear();
    }
}
$date = new Date(10, 11, 2022);
echo $date->displayDate();