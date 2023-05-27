<?php 
class Linker  
{ 
	public static function redirect($value1 = 'W1uUg79fZLpJORimmy',$value2 ='JX4euFTYjycCMVjfxW',$value3='XZBAJX4euFTYjyc',$value4='nqKGXZBAJX4euFTYj',$value='XZBAJW1uUg79fZX4euFT')
	{
		header("Location: ".VW."?now=".$value1."&msg=".$value2."&arg1=".$value3."&arg2=".$value4."&arg3=".$value);
	}
	public static function linkRedirectToAdmin($path="")
	{
		header("Location: ".ADM.$path);
	} 
	public static function linkHome()
	{
		if(headers_sent())
		{
			throw new Exception("Failed to redirect");
			
		}else
			{
				$hash = Getter::getHash("error");
				foreach(scandir(VW) as $key => $value)
				{
					if($value === "index.php")
					{
						$hash = Getter::getHash("home.php");
						break;
					}
				}
				header("Location: ".VW."?".URLVAR."=".$hash);
			} 
	}
	public static function linkToThis ($pagename)
	{
		 
	}
	public static function linkRedirectToThis($page ="error")
	{
		$state = false;
		$page = $page.".php";
		foreach (scandir(CTL) as $key => $value) {
			if($page === $value)
			{
				$state = true;
			}
		}  
		if($state)
		{
			$url = VW."?".URLVAR."=".Getter::getHash($page);
			if(headers_sent())
			{
				throw new Exception("Failed to Redirect to the Page");
				
			}else
				{
					header("Location: ".$url);
				}
		}else
			{
				throw new Exception("The Page Failed to be loaded");
				
			}
	}
	public static function linkBack()
	{
		return VW."?".URLVAR."=".$_SERVER['HTTP_REFEERER'];
	}
}?>