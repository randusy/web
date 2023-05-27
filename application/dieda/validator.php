<?php
class Validator
{
	public $isValid = "";

	public function __construct($formname,$inputname1,$inputname2=null,$inputname3=null,$inputname4=null,$inputname5=null,
	$inputname6=null,$inputname7=null,$inputname8=null,$inputname9=null,$inputname10=null,$inputname11=null,$inputname12=null,
	$inputname13=null,$inputname14=null,$inputname15=null,$inputname16=null)
	{
		if(isset($_REQUEST[$formname]))
		{
			 $num = func_num_args() - 1;
			 if($num === 1)
			 {
			 	$input = $_REQUEST[$inputname1];
				if($input != "")
				{
					$this->isValid = "valid";					
				}else{
					throw new Exception("Empty $inputname1");
				}
			 }else if($num === 2)
			 { 
				$input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2] );
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 3)
			 {
			 	$input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 4)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 5)
			 {
			 	  $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 6)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 7)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 8)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 9)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 10)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 11)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 12)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11],$inputname12 => $_REQUEST[$inputname12]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }
			 }else if($num === 13)
			 {
			 	$input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11],$inputname12 => $_REQUEST[$inputname12]
				 ,$inputname13 => $_REQUEST[$inputname13]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }	 
			 }else if($num === 14)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11],$inputname12 => $_REQUEST[$inputname12]
				 ,$inputname13 => $_REQUEST[$inputname13],$inputname14 => $_REQUEST[$inputname14]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }	 
			 }else if($num === 15)
			 {
			 	$input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11],$inputname12 => $_REQUEST[$inputname12]
				 ,$inputname13 => $_REQUEST[$inputname13],$inputname14 => $_REQUEST[$inputname14],$inputname15 => $_REQUEST[$inputname15]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }	 			 	 
			 }else if($num === 16)
			 {
			 	 $input = array($inputname1 => $_REQUEST[$inputname1],$inputname2 => $_REQUEST[$inputname2],$inputname3 => $_REQUEST[$inputname3]
				 ,$inputname4 => $_REQUEST[$inputname4],$inputname5 => $_REQUEST[$inputname5],$inputname6 => $_REQUEST[$inputname6],
				 $inputname7 => $_REQUEST[$inputname7],$inputname8 => $_REQUEST[$inputname8],$inputname9 => $_REQUEST[$inputname9]
				 ,$inputname10 => $_REQUEST[$inputname10],$inputname11 => $_REQUEST[$inputname11],$inputname12 => $_REQUEST[$inputname12]
				 ,$inputname13 => $_REQUEST[$inputname13],$inputname14 => $_REQUEST[$inputname14],$inputname15 => $_REQUEST[$inputname15]
				 ,$inputname16 => $_REQUEST[$inputname16]);
				 foreach ($input as $key => $value) {
					 if($value != "")
					 {
					 	$this->isValid = "valid";
					 }else{ 
					 	throw new Exception("Empty $key");
						break;
					 }
				 }	 		
			 }else{
			 	throw new Exception("Invalid Arguements");
				 
			 }	 
		}  
			 
	}
	public function __toString()
	{
		return $this->isValid;
	}
}?>