<?php
require_once 'application/rootini.php';  
 try{
 	 Linker::linkHome(); 
 }catch(Exception $e)
 {
 	echo $e->getMessage();
 }
 
?>
