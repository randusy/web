<?php 
class User extends Session
	{
		public function isLogedIn()
		{ 
			return  $this->login;
		} 
		public function isTeacher()
		{
			if($this->status == "teacher")
			{
				return true;
			}else
			{
				return false;
			}
		} 
		public function isAdmin()
		{
			if($this->status == "admin")
			{
				return true;
			}else
			{
				return false;
			}
		} 
		public function isStudent()
		{
			if($this->status == "student")
			{
				return true;
			}else
			{
				return false;
			}
		} 
		public function isUserMailSet()
		{
			if(isset($this->email))
			{
				return $this->email;
			}else{
				return null;
			}
		} 
		 
	}
?>
