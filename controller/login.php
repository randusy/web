<?php
require_once '../application/initialise.php'; 
 	if (isset($_GET["un"])) {
		 $un = $_GET['un']; $pw = $_GET['pw'];
		 
		try{
			$retreve = new Retreaver("LIMIT 1","users","email",$un);
			if($retreve->retreaved)
			{
				new Login($un,$pw);				  
			}else{
				Messanger::alert("User Not Registered Yet",Getter::getLoginErrorTitleMsg());
			}
		}catch(Exception $e)
		{
			 Messanger::alert($e->getMessage(),Getter::getLoginErrorTitleMsg());
		}
		
	 } else {
		 Messanger::alert("Error While Loggin In",Getter::getLoginErrorTitleMsg());
	 }
	 
 ?>
