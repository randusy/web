<?php 
class Session extends Retreaver
{
	protected $login = false;  
	protected $email ="";
	  
	 public function __construct($user = "")
	 {
		  	Session::startSessionIfNotStarted();
			if($user)
			{
				$_SESSION[SEM] = $user;
			}
		 	Session::checkIfIsLoggedIn($user);
		 	
	 } 
	private function startSessionIfNotStarted()
	{
		if(!isset($_SESSION))
		{ 
			session_start();
			$this->login = false;  
		} 
	} 
	 
	private function checkIfIsLoggedIn($user)
	{
		if(isset($_SESSION[SEM]))
		{ 
				$this->email = $_SESSION[SEM];
				$this->login = true;			
		}else
		{
			unset($this->email);
			$this->login = false;
		}
	}
}
?>
