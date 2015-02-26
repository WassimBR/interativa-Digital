<?php
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
	

function Ajouter($Name,$Email,$Message,$Ip,$Date)
{	
	
	$Requete="insert into ".$this->Table."	(name,email,message;ip;date)
		
		values
		
		('".$Name."','".$Email."','".$Message."','".$Ip."','".$Date."')";
		
		mysql_query($Requete);
}



function Supprimer($idcomment)
{
	$requete="DELETE from ".$this->Table." WHERE Id  = ".$idcomment." ;";
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

}
?>