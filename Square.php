<?php
include_once("./Colorable.php");
include_once('Rectangle.php');

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function howToColor()
    {
        echo ("Color all four sides.");
    }
}
