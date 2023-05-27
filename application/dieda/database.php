<?php 
class Database  
{
	protected $database = "dieda";
	private $server = "localhost";
	protected $user = "randusy";
	protected $password = "gavana38"; 
	protected $resultset = false;
	private $connection = false;
	protected $rows;
	 
	public function openConnectionAndSelectDb()
	{
		$state = false; 
			$connection = new mysqli($this->server,$this->user,$this->password);
		  	if(!$connection->connect_error)
			{
				$this->connection =  $connection;
				if($connection->select_db($this->database))
				{
					 
					 $state = TRUE;
				} else
					{
						$db=""; $dbs="";  
					$sql = "CREATE DATABASE IF NOT EXISTS ".$this->database;
					  if($this->query($sql))
					  {
					  	$db =" but was created";
					  } 
					  $sql = "USE ".$this->database;
					   if($this->query($sql))
					   {}
					   $sql = "CREATE TABLE IF NOT EXISTS `users` (
						  `usersId` int(250) NOT NULL AUTO_INCREMENT,
						  `firstname` varchar(250) NOT NULL,
						  `secname` varchar(250) NOT NULL,
						  `thirdname` varchar(250) NOT NULL,
						  `email` varchar(250) NOT NULL,
						  `password` varchar(128) NOT NULL,
						  `status` varchar(20) NOT NULL,
						  `profilephoto` varchar(1000) NOT NULL,
						  `theme` varchar(20) NOT NULL,
						  PRIMARY KEY (`usersId`)
						) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
					    
					     if($this->query($sql))
					   { $dbs = "and tables were created too try refresh page and you wont get this error anymore";}
					   throw new Exception("Database $this->database failed to be Selected $db $dbs"); 
					}
			}else
				{
					throw new Exception ("Connection To the Database Failed Check Your  Username Or Password");
				}
			return $state;
	} 
	protected function closeConnection()
	{
		if($con = $this->connection)
		{
			 $con->close(); 
		}
		 
	} 
	protected function query($sql)
	{
		$state = FALSE;
		if($con = $this->connection)
		{
			 if($this->resultset = $con->query($sql))
			 {
			 	$state = TRUE;
			 }else
			 { 
			 	throw new Exception("Query String Error");
				 
			 	}
		}else
		{ 
			throw new Exception("The Connection Object Is Not Available");
			
		}
		 return $state;
	} 
	protected function fetchArray()
	{
		$state = false; 
		if($this->resultset)
		{
			$result = $this->resultset;
			if($this->rows = $result->fetch_assoc())	
			{ 
				$state = true;
			} 
		} 
		return $state;
	} 
	 protected function prepareString($string)
	 {
		if($con = $this->connection)
		{ 
				$string = $con->real_escape_string($string);
				$string = trim(htmlentities($string));
			 
		}else
			{
				throw new Exception("Cant Escape String Without Any Mysqli Instance");
				
			}
		return $string;
	 }
}?>
