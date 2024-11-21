<?php
require_once 'Resizeable.php';
class Square implements Resizeable
{
    public function resize(float $percent)
    {
        $ran = rand(1, 100);
        echo ("resize: " . ($percent * $ran));
    }
}
