<?php 
class Getter extends User
{
	private static $loginErrorTitleMsg = "Login Error Message";
	private static $signUpErrorTitleMsg = "Registration Error Message";
	private static $signUpSuccessTitleMsg = "Registration Massage";
	
	public static function getSignUpSuccessTitleMsg()
	{
		return self::$signUpSuccessTitleMsg;
	}
	public static function getSignUpErrorTitleMsg()
	{
		return self::$signUpErrorTitleMsg;
	}
	public static function getLoginErrorTitleMsg()
	{
		return self::$loginErrorTitleMsg;
	}
	public function getUserName()
		{		  
			try
			{
				$id = $this->id;
				$retreaved = new Retreaver("LIMIT 1","users","usersId",$id);
				return $retreaved->rows['firstname'];				  
			}catch(Exception $e)
			{
				throw new Exception("User Not Available");
			}			  
		} 
		public function getUserMail()
		{
			try
			{
				$id = $this->id;
				$retreaved = new Retreaver("LIMIT 1","email","usersId",$id);
				return $retreaved->rows['email'];				  
			}catch(Exception $e)
			{
				throw new Exception("Email Not Found");
			}
		} 
		public function getUserId($email)
		{
			try
			{
				$retreaved = new Retreaver("LIMIT 1","email","email",$email);
				return $retreaved->rows['usersId'];				  
			}catch(Exception $e)
			{
				throw new Exception("Identity Number Not Found");
			}
		}  
		public static function getHash($word)
		{
			 
			return password_hash(md5($word), PASSWORD_BCRYPT);
				 
		}
		public function getUserFullName()
		{
			try
			{
				$id = $this->id;
				$retreaved = new Retreaver("LIMIT 1","users","usersId",$id);
				return $retreaved->rows['firstname']." ".$retreaved->rows['secname'];				  
			}catch(Exception $e)
			{
				throw new Exception("User Not Available");
			}
		}
		public function getRestLink($email)
		{
			$hash = Getter::getHash(SN.$email);
			$home = Getter::getHash("home.php");
			return "<p>Click on the link to activate Your Account </p>".SD."view?".URLVAR."=".$home."&actcode=".$hash."&activate=true&em=".$email;
		}
		public function getRestPasswordLink($email)
		{
			$hash = Getter::getHash(SN.$email);
			$home = Getter::getHash("home.php");
			return SD."view?".URLVAR."=".$home."&auth=".$hash."&res=true&em=".$email;
		}
		public static function getHomeAddress()
		{
			$home = Getter::getHash("home.php");
			return VW."?".URLVAR."=".$home;
		}
		public static function getUserStatus()
		{
			return "root";
		} 
		 
}
?>
