<?php
error_reporting(E_ERROR | E_PARSE);
class Configuration
{
	public $Serveur="localhost";
	public $Utilisateur="root";
	public $MDP="";
	public $BD="interativadigital";
	
	function connexion ()
	 {
		 $Con=mysql_connect($this->Serveur,$this->Utilisateur,$this->MDP);
		 mysql_select_db($this->BD,$Con);
	 }
}
?>

