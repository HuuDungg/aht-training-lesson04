<?php
include_once("./Employee.php");
include_once("./Workable.php");

class Developer extends Employee implements Workable
{
    public function calculateBonus()
    {
        echo ("your bunus is: " . $this->salary / 100 * 10);
    }

    public function work()
    {
        echo ("Developer your life");
    }
}
