<?php
// Fatal error: Class CannotExtendFinalClass may not inherit from final class (Employee)
final class Employee {
    final public function calculateWage(float $hourlyRate, int $numHoursWorked)
    {
        return $hourlyRate * $numHoursWorked;
    }
}
class CannotExtendFinalClass extends Employee {
    // Fatal error: Cannot override final method Employee::calculateWage()
    public function calculateWage(float $hourlyRate, int $numHoursWorked) {
        if ($this->employeeName === 'Andrew') {
            return 1000000;
        }
        return $hourlyRate * $numHoursWorked;
    }
}
$oops = new CannotExtendFinalClass;
$oops->employeeName = 'Andrew';
echo $oops->calculateWage(10.00, 50);