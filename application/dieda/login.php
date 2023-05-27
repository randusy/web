<?php
class Login extends  Retreaver
	{
		public function __construct($email,$password)
		{ 
				try 
				{ 
					$this->openConnectionAndSelectDb();
					$email = $this->prepareString($email);
					$pwd = $this->prepareString($password);
					$retreave = new Retreaver("LIMIT 1","users","email",$email);
				 	 if($retreave->retreaved)
					 {
					 	$pwdd = $retreave->rows['password'];  
						 if(Authenticator::authenticate($pwd,$pwdd))
							  { 
								  new Session($retreave->rows['email']); 
								  echo '<script language="JavaScript">window.location.href = "../";</script>'; 
							  }else
							  {  
								  throw new Exception("Login Failed");
							  }
					 }else
						 {
							 throw new Exception("Failed Authenticating");
							 
						 } 
					
				}catch(Exception $e)
				{
					 throw new Exception($e->getMessage());
				}
				 
		}
	}
?>
