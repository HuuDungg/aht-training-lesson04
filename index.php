<?php
include './Circle.php';
include_once './Rectangle.php';
include_once './Square.php';

$r = new Rectangle();
$r->resize(123);


$r = new Circle();
$r->resize(123);

$r = new Square();
$r->resize(123);
