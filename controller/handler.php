<?php
require_once '../application/initialise.php';
if(isset($_GET['fn']))
	{
		$fn = $_GET['fn']; $sn = $_GET['sn']; $tn = $_GET['tn']; $em = $_GET['em']; $pw = $_GET['pw'];
		$pw = Getter::getHash($pw);
		try{
			$q = new Retreaver("LIMIT 1","users","email",$em);
			if($q->retreaved)
			{
				Messanger::alert("<p style='padding:2px;color:red;'>The Is User Already Registered With The Site</p>",Getter::getSignUpErrorTitleMsg());
			}else
			{
				new Data("users","firstname",$fn,"secname",$sn,"thirdname",$tn,"email",$em,"password",$pw);
				Messanger::alert("<p style='color:green;'>Registered Successfully</p>",Getter::getSignUpSuccessTitleMsg());
			}		
			}catch(exception $e)
			{
				Messanger::alert($e->getMessage(),Getter::getSignUpErrorTitleMsg());
			}
	}else{
		Messanger::alert("No Data To submited Yet",Getter::getSignUpErrorTitleMsg());
	}
?>