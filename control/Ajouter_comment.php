<?php
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Message = $_POST["Message"];
$Ip = $_POST["Ip"];
$Post = $_POST["Post"];

require_once("..\Model\CommentModel.php");


$An = new CommentModel(); 
$An->Ajouter($Name,$Email,$Message,$Ip,$Post);

$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
