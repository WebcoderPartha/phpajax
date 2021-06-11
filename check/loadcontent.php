<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/Project.php');

$pro = new Project();

$loadcontent = $pro->loadContent();