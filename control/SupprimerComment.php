<?php
$Id = $_GET["Id"];

require_once("..\Model\CommentModel.php");

$An = new CommentModel(); 
$An->Supprimer($Id);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
