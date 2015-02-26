<?php
require('..\Entity\Posts.php');
require_once('..\Configuration.php');

class PostsModel
{

	public $Table="post";
function __construct()
	{
		$Conf=new Configuration();
		$Conf->connexion();
	}

	
	

function Ajouter($Title,$Subtitle,$Text,$Categorie)
{	
	
	$Requete="insert into ".$this->Table."	(title,subtitle,text,categorie)
		
		values
		
		('".$Title."','".$Subtitle."','".$Text."','".$Categorie."')";
		
		mysql_query($Requete);
}



function Supprimer($Id)
{
                $requete="DELETE from ".$this->Table." WHERE idpost  = ".$Id." ;";
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
		$An = new Posts(0,"");
		$An->setIdpost($data['idpost']); 
		$An->setTitle($data['title']);
                $An->setSubtitle($data['subtitle']);
                $An->setText($data['text']);
                $An->setDate($data['date']);
                $An->setCategorie($data['categorie']);
		$Tableau[$i]=$An;
		$i++;
		}
	
	return $Tableau;
}
function AfficherSinglePost($id)
{
		$Tableau= array();
		$requete=" select * from ".$this->Table." WHERE idpost  = ".$id." ;";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		$i=0;
		
		$data= mysql_fetch_array($resultat);
		
		$An = new Posts(0,"");
		$An->setIdpost($data['idpost']); 
		$An->setTitle($data['title']);
                $An->setSubtitle($data['subtitle']);
                $An->setText($data['text']);
                $An->setDate($data['date']);
                $An->setCategorie($data['categorie']);
                $Tableau[$i]=$An;
                
                return $Tableau;

}


function RetournerNombrePosts()
	
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
        
        
}
?>