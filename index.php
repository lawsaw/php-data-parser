<?php

include_once 'lib/phpQuery/phpQuery.php';
include_once "dir/Main.php";
include_once "dir/Blue.php";

$data = new Main;
$blue = new Blue;

var_dump($blue->init());

