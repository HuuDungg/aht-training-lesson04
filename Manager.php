<?php
include_once("./Employee.php");
include_once("./Workable.php");

class Manager extends Employee implements Workable
{
    public function calculateBonus()
    {
        echo ("your bunus is: " . $this->salary / 100 * 20);
    }

    public function work()
    {
        echo ("manager project");
    }
}
