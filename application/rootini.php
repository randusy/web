<?php
if(!defined("DS"))
{
	define("DS","/");
}
 
if(!defined("SR"))
{
	define("SR","");
}
if(!defined("VW"))
{
	define("VW",SR."view".DS);
}
if(!defined("LIB"))
{
	define("LIB","application".DS."dieda".DS); 
} 
 if(!defined("X"))
{
	define("X",".php"); 
}	
if(!defined("URLVAR"))
{
	define("URLVAR","gedknmiihkfjkjhjdcyfhskkfgh"); 
}	
function __autoload($class)
{
	require_once  LIB.strtolower($class).X; 
}?>