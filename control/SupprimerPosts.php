<?PHP
require_once("..\model\PostsModel.php");
$Id = $_GET["Id"];
$An = new PostsModel(); 
$An->Supprimer($Id);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
