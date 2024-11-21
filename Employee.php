<?php
abstract class Employee
{
    protected $name;
    protected $salary;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function calculateBonus();
}
