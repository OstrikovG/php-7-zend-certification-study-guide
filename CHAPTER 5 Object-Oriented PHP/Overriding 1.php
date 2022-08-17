<?php
class Employee
{
    public function calculateWage(float $hourlyRate, int $numHoursWorked)
    {
        return $hourlyRate * $numHoursWorked;
    }
}
class Oops extends Employee {
    public function calculateWage(int $hourlyRate, int $numHoursWorked) {
        return $hourlyRate * $numHoursWorked;
    }
}