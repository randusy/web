<?php 
	class Authenticator
	{
		 
				
		public static function authenticate($word,$hash)
		{ 
		  if(password_verify(md5($word),$hash))
		  { 
			  return true;
		  }else{
		  	return false;
		  }
		} 		 		 
	}
?>
