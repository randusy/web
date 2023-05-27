<?php
class Logout extends Session
{
	public function __construct()
	{
			 if(isset($_GET['logout']))
			 {  
			 	if(Authenticator::authenticate("frands",$_GET['logout']))
				{
					if(isset($_SESSION))
					{
						 unset($_SESSION[SEM]);
						 if(isset($this->email)){unset($this->email);}
						 unset($_SESSION);
						 $this->login = false;
						session_unset();
						session_destroy();
					} 
					Linker::linkHome();
				}
			 }
		
	}
}
?>
