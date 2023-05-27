<?php
$name = "TTL";
switch (T) {
	case 'error.php':
		if(!defined($name))
		{
			define($name,"Page Not Found");
		}
		break;
	case 'home.php';
		if(!defined($name))
		{
			define($name,"Home Page");
		} 
	case 'settings.php';
		if(!defined($name))
		{
			define($name,"Users Settings");
		}  
	case 'signup.php';
		if(!defined($name))
		{
			define($name,"Sign Up Here");
		} 
	case 'cv.php';
		if(!defined($name))
		{
			define($name,"Curriculum Vitae");
		}  
	default:
		if(!defined($name))
		{
			define($name,"Page Could Not Be Recorgnised");
		}  
		break;
}
?>