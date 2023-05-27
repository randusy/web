<?php 
class Day  
{ 
	public static  function daysDate($time="")
	{ 
		if($time != "")
		{ 
			$now = date("D  jS M Y",$time); 
		}else{
			$now = date("D  jS M Y",time());
		}
		return $now;
	} 
	public   function daysDateAndTime($time="")
	{
		if($time !=""){
		 $result = self::daysDate($time)." "."At: ".self::daysTime($time); return $result;
		}else{
			$result = self::daysDate()." "."At: ".self::daysTime(); return $result;
		}
	} 
	public static function daysTime($time="")
	{  
		if($time != "")
		{ 
			$now = date("h:i:s A",$time); 
		}else{
			$now = date("h:i:s A",time());
		}
		return $now;
	}
	public static function daysYear($time="")
	{
		if($time != "")
		{  
			$now = date("Y",$time); 
		}else{
			$now = date("Y",time());
		}
		return $now; 
	}
}
?>
