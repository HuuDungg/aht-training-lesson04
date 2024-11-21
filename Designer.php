<?php
include_once("./Employee.php");
include_once("./Workable.php");

class Designer extends Employee implements Workable
{
    public function calculateBonus()
    {
        echo ("your bunus is: " . $this->salary * 15 / 100);
    }

    public function work()
    {
        echo ("Design your feture");
    }
}
