<?php
$usr = new User();
if($usr->isLogedIn())
{
	echo "The settings goes here";
}
?>