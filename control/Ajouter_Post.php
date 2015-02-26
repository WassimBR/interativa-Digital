<?php
require_once("..\Model\PostsModel.php");
$Title = $_POST["Title"];
$Subtitle = $_POST["Subtitle"];
$Text = $_POST["Text"];
$Categorie = $_POST["Categorie"];




$An = new PostsModel(); 
$An->Ajouter($Title,$Subtitle,$Text,$Categorie);

$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
