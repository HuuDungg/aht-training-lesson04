<?php
include_once("./Rectangle.php");
include_once("./Shape.php");
include_once("./Square.php");

$sh = new Shape("circle");
$s = new Square("HuuDung", 200000);
$r = new Rectangle("Hihi", 231, 3912);

$bubu = [$sh, $s, $r];
