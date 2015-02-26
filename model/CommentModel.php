<?PHP
require('..\Entity\Comment.php');
require_once('..\Configuration.php');

class CommentModel
{
	public $Table="comment";



	function __construct()
	{
		$Conf=new Configuration();
		$Conf->connexion();
	}
	

function Ajouter($Name,$Email,$Message,$Ip,$Post)
{	
	
	$Requete="insert into ".$this->Table."	(name,email,message,ip,post)
		
		values
		
		('".$Name."','".$Email."','".$Message."','".$Ip."','".$Post."')";
		
		mysql_query($Requete);
}



function Supprimer($Id)
{
                $requete="DELETE from ".$this->Table." WHERE idcomment  = ".$Id." ;";
		mysql_query($requete) or die("Ereur ".mysql_error());
}


function Afficher()
{
		$Tableau= array();
		$requete=" select * from ".$this->Table." ";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		$i=0;
		
		while ($data= mysql_fetch_array($resultat)) 
		{
		$An = new Comment(0,"");
		$An->setIdcomment($data['Idcomment']); 
		$An->setName($data['name']);
                $An->setEmail($data['email']);
                $An->setMessage($data['message']);
                $An->setIp($data['ip']);
                $An->setDate($data['date']);
		$An->setPost($data['post']);
                $Tableau[$i]=$An;
		$i++;
		}
	
	return $Tableau;
}

function RetournerNombreComment()
	
	{
		$j=0;
		$requete=" select * from ".$this->Table." ";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		
		while ($data= mysql_fetch_array($resultat)) 
		
		while($a=mysql_fetch_row($resultat))
	
		{
		$j++;
					 
		}
		
		return $j;
	}
function AfficherCommentById($id)
{
		$Tableau= array();
		$requete=" select * from ".$this->Table."WHERE post=".$id." ";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		$i=0;
		
		while ($data= mysql_fetch_array($resultat)) 
		{
		$An = new Comment(0,"");
		$An->setIdcomment($data['idcomment']); 
		$An->setName($data['name']);
                $An->setEmail($data['email']);
                $An->setMessage($data['message']);
                $An->setIp($data['ip']);
                $An->setDate($data['date']);
                $An->setPost($data['post']);
		$Tableau[$i]=$An;
		$i++;
		}
	
	return $Tableau;
}
}
?>