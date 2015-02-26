<?php

class LoginModel
{
		
	
	function log()
	{	
	
       
            $user = $_POST['login'];
            $pass = $_POST['pass'];

                if(($user=="interativa") && ($pass=="K5uGP8m")) 
                {
                                  
                header('Location:../admin/index.php'); // nom + localité à changer
                }
        

        else
        {
	
            echo(" Login Failed ");
            header('Location:../Vue/Login.php'); // nom + localité à changer

        }


}}
?>