<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/Project.php');

$pro = new Project();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $content = $_POST['content'];
    $contentId = $_POST['contentId'];
    $user = $pro->autoSaveContent($content,$contentId);
}