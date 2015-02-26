<?php
$Name = $_POST["name"];
$Email = $_POST["email"];
$Message = $_POST["message"];
$Ip = $_POST["ip"];
$Date = $_POST["date"];

require_once("..\Model\CommentModel.php");


$An = new CommentModel(); 
$An->Ajouter($Name,$Email,$Message,$Ip,$Date);

$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
