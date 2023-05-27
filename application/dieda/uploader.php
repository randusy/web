<?php 
class Uploader extends User
{ 
	public function uploadImage()
	{
		
	if(isset($_FILES['submitted']))
	 {   
	 	 $errorArray = $_FILES['submitted']['error'];

	 	if($errorArray == 8)
	 	{
	 		echo Messanger::notificationBox("red","black","Seems the file you are uploading is not right");
	 	}
	 	else if($errorArray == 7)
	 	{
	 		echo Messanger::notificationBox("red","black","Sorry but the system can\'t write to disk");
	 	}
	 	else if($errorArray == 6)
	 	{
	 		echo Messanger::notificationBox("red","black","Something went wrong please try again");
	 	}
	 	else if($errorArray == 4)
	 	{
	 		echo Messanger::notificationBox("red","black","No file to be uplaoded");
	 	}
	 	else if($errorArray == 3)
	 	{
	 		echo Messanger::notificationBox("red","black","Photo not fully uploaded please try again");
	 	}
	 	else if($errorArray == 2)
	 	{
	 		echo Messanger::notificationBox("red","black","Photo is too large");
	 	}
	 	else if($errorArray == 1)
	 	{
	 		echo Messanger::notificationBox("red","black","Photo is too large to be Uploaded");
	 	}
	 	else if($errorArray == 0)
	 	{
 
	 $fileName = basename($_FILES['submitted']['name']);

		$user = new User();
	 	 	$temp = $_FILES['submitted']['tmp_name'];
	 	$username = $user->getMail(); 
	 	  $nume = exif_imagetype($temp);  
	 	if($nume >0 && $nume<17)
	 	{

	 	if(!file_exists(UPL.$username))
	 	{
	 		mkdir(UPL.$username);
	 	}
	 	if(file_exists(UPL.$username.DS.$fileName))
	 	{
	 		echo Messanger::notificationBox("red","black",'Sorry It seems this Photo has already been uploaded if not try to rename it and try again');
	 	}
	 	else {
		 	if(move_uploaded_file($temp,UPL.$username.DS.$fileName))
		 	{
		 		$uid = $user->getMail(); 
			     $this->openConnectionAndSelectDb();
		 	echo Messanger::notificationBox("green","black","Profile Photo Uploaded Sussesfully ");
		 	$sql = "SELECT profilePhoto FROM users WHERE email='$uid'";
		 	if($this->query($sql)){
		 	if($this->fetchArray())
		 	{}
		 	}
		 	$sql = "UPDATE  users SET profilePhoto='$fileName' WHERE email='$uid'";
		 	if($this->query($sql)){ }

			    $this->closeConnection();
		 	}
		 	else {
		 	echo Messanger::notificationBox('red','black','File failed to be uploaded Permission denied By the Server Computer');
		 	}
	 	}
	 }else{echo Messanger::notificationBox('red','black','File Error <br>The file you are trying to upload is not a Photo');}
	 	}
	 }
	}
}
?>
