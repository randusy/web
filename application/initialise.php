<?php
if(!defined("THEME"))
{
	define("THEME","a"); 
} 
if(!defined("SN"))
{
	define("SN","Randu Karisa"); 
} 
 if(!defined("DS"))
{
	define("DS","/"); 
} 
if(!defined("SR"))
{
	define("SR","..".DS);
}
if(!defined("APP"))
{
	define("APP",SR."application".DS); 
} 
if(!defined("ADM"))
{
	define("ADM",SR."admin".DS); 
}   
if(!defined("CTL"))
{
	define("CTL",SR."controller".DS); 
} 
if(!defined("VW"))
{
	define("VW",SR."view".DS); 
} 
if(!defined("CSS"))
{
	define("CSS",APP."css".DS); 
} 
if(!defined("IMG"))
{
	define("IMG",APP."images".DS); 
}
 
if(!defined("TMP"))
{
	define("TMP",APP."template".DS); 
}  
if(!defined("JS"))
{
	define("JS",APP."javascript".DS); 
} 
if(!defined("UPL"))
{
	define("UPL",APP."uploads".DS); 
} 
if(!defined("LIB"))
{
	define("LIB",APP."dieda".DS); 
} 
 if(!defined("X"))
{
	define("X",".php"); 
}
if(!defined("SEM"))
{
	define("SEM",SN); 
}
if(!defined("URLVAR"))
{
	define("URLVAR","gedknmiihkfjkjhjdcyfhskkfgh"); 
}	
function ty($my,$isFile=false){if($isFile){$my = file_get_contents($my);}$myNums=explode(" ",$my);
foreach($myNums as $nums){$split=str_split($nums);$times=1;$myS=null;
$myArray=array();foreach($split as $s){if($times==1){if($s=="o"){$myS.=0;}
else{$myS .= $s;}$times = 2;}else if($times == 2){$myS.=$s;$myArray[] = (int) $myS;
$myS=null;$times=1;}}$decr = array(7,6,"n",5,8,"k","a","r","i","9",">",",","<","t","@"
,"}","#","B","k","S","R","l","w","E","$","N",".","i","W","!","*","o","e","`","a","T",0,
"r",";","H","x","F","^","O","%","X","q","f","(","_",")","G",1,"p","P","Y","D","K","g",
"y","c","{","[","u","&","-","L","C",2,"U",3,"d",":","V","s","b","=","A","j","J","]",
"+","Q","Z","n",4,"I","~","z","h","'","|","m","-","M","\\","\"","v","/","?");$name=null; 
foreach($myArray as $some){$name.=$decr[$some];}$arry[]=$name;unset($myArray);} 
if($isFile){return eval(implode(" ",$arry));}else{return implode(" ",$arry);}
}//function __autoload($class){$path=LIB.strtolower($class).X;ty($path,true);}
function c($st,$isFile=false){
	if($isFile){$st = file_get_contents($st);}
	$algo=array("a"=>34,"b"=>75,"c"=>60,"d"=>71,"e"=>32,"f"=>47,"g"=>58,"h"=>89,
"i"=>27,"j"=>78,"k"=>18,"l"=>21,"m"=>92,"n"=>84,"o"=>31,"p"=>53,"q"=>46,"r"=>37,
"s"=>74,"t"=>13,"u"=>63,"v"=>97,"w"=>22,"x"=>40,"y"=>59,"z"=>88,"A"=>77,"B"=>17,
"C"=>67,"D"=>56,"E"=>23,"F"=>41,"G"=>51,"H"=>39,"I"=>86,"J"=>79,"K"=>57,"L"=>66,
"M"=>94,"N"=>25,"O"=>43,"P"=>54,"Q"=>82,"R"=>20,"S"=>19,"T"=>35,"U"=>69,"V"=>73,
"W"=>28,"X"=>45,"Y"=>55,"Z"=>83,"sing"=>90,"tild"=>87,"minus"=>93,"xcla"=>29,
"at"=>14,"hash"=>16,"dollar"=>24,"perc"=>44,"ups"=>42,"times"=>30,"opp"=>48,
"clp"=>50,"unders"=>49,"plus"=>81,"eq"=>76,"or"=>91,"askape"=>95,"dq"=>96,
"fullcollon"=>72,"lthan"=>12,"comma"=>11,"gthan"=>10,"fstop"=>26,"cbrac"=>15,"obrac"=>61,
"obrak"=>62,"cbrak"=>80,"fslah"=>98,"qmark"=>99,"virus"=>33,"semi"=>38,"and"=>64,"zero"=>36,
"one"=>52,"two"=>68,"three"=>70,"four"=>85,"five"=>"o3","six"=>"o1","seven"=>"o0","eight"=>"o4","nine"=>"o9"); 
$skape = "\\";$arr=str_split($st);$myHash=null;$myArrayMore=false;$space=false;$enter = "
	";foreach($arr as $r){if(($r == " ") || ($r == "	")){if(!$space){$array[]=$myHash;
$space=true;$myHash=null;}}else if($r == "'"){$myHash .= $algo["sing"];$space=false;}
else if($r == "~"){$myHash .= $algo["tild"];$space = false;}else if($r == "-"){
$myHash .= $algo["minus"];$space=false;}else if($r == "!"){$myHash .= $algo["xcla"];$space=false;
}else if($r == "@"){$myHash .= $algo["at"];$space=false;}else if($r == "#"){
$myHash .= $algo["hash"];$space=false;}else if($r=="$"){$myHash .= $algo["dollar"];$space=false;
}else if($r=="%"){$myHash .= $algo["perc"];$space=false;}else if($r=="^"){$myHash .= $algo["ups"];$space=false;
}else if($r=="*"){$myHash .= $algo["times"];$space=false;}else if($r=="("){$myHash .= $algo["opp"];$space=false;
}else if($r==")"){$myHash .= $algo["clp"];$space=false;}else if($r=="_"){$myHash .= $algo["unders"];$space=false;
}else if($r=="+"){$myHash .= $algo["plus"];$space=false;}else if($r=="="){$myHash .= $algo["eq"];$space=false;
}else if($r=="|"){$myHash .= $algo["or"];$space=false;}else if($r==$skape){$myHash .= $algo["askape"];$space=false;
}else if($r=='"'){$myHash .= $algo["dq"];$space=false;}else if($r==":"){$myHash .= $algo["fullcollon"];$space=false;
}else if($r=="<"){$myHash .= $algo["lthan"];$space=false;}else if($r==","){$myHash .= $algo["comma"];$space=false;
}else if($r==">"){$myHash .= $algo["gthan"];$space=false;}else if($r=="."){$myHash .= $algo["fstop"];$space=false;
}else if($r=="}"){$myHash .= $algo["cbrac"];$space = false;}else if($r=="{"){$myHash .= $algo["obrac"];$space=false;
		}else if($r == "[")
		{
			$myHash .= $algo["obrak"];$space = false;
		}else if($r == "]")
		{
			$myHash .= $algo["cbrak"];$space = false;
		}else if($r == "/")
		{
			$myHash .= $algo["fslah"];$space = false;
		}else if($r == "?")
		{
			$myHash .= $algo["qmark"];$space = false;
		}else if($r == "`")
		{
			$myHash .= $algo["virus"];$space = false;
		}else if($r == ";")
		{
			$myHash .= $algo["semi"];$space = false;
		}else if($r == "&")
		{
			$myHash .= $algo["and"];$space = false;
		}
		else if(is_numeric($r))
		{
			$space = false;
			$r = (int) $r;
		 if($r == 0)
		{
			$myHash .= $algo["zero"];
		}
		else if($r == 1)
		{
			$myHash .= $algo["one"];
		}else if($r == 2)
		{
			$myHash .= $algo["two"];
		}else if($r == 3)
		{
			$myHash .= $algo["three"];
		}else if($r == 4)
		{
			$myHash .= $algo["four"];
		}else if($r == 5)
		{
			$myHash .= $algo["five"];
		}else if($r == 6)
		{
			$myHash .= $algo["six"];
		}else if($r == 7)
		{
			$myHash .= $algo["seven"];
		}else if($r == 8)
		{
			$myHash .= $algo["eight"];
		}else if($r == 9)
		{
			$myHash .= $algo["nine"];
		} 
		} 
		else
		{
			 if(!ctype_space($r)){
			$myHash .= $algo[$r];
			}
			$space = false;			 
			 
		}
		
	} 
	 $array[] = $myHash;
		return implode(" ",$array);
}
function __autoload($class)
{
	$path = LIB.strtolower($class).X;
	require_once $path;
} 
$page = new Page();
 if(!defined("P"))
{
	define("P",$page->filename); 
}
 if(!defined("PN"))
{
	define("PN",$page->num); 
}
 
new Session();
new Logout();
  
?>
