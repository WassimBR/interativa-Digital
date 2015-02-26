<?PHP
require_once("..\Model\CommentModel.php");
$Id = $_GET["Id"];
$An = new CommentModel(); 
$An->Supprimer($Id);
$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);
?>
