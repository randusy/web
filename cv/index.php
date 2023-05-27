<?php
require_once '../application/initialise.php';  
 try{
 	 Linker::linkRedirectToThis("cv"); 
 }catch(Exception $e)
 {
 	echo $e->getMessage();
 }
 
?>
