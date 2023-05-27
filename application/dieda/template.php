<?php
class Template extends User
{ 
	public function template()
	{
		$page = "";
		$pagename = "wow";  
		if(isset($_GET[URLVAR]))
		{
			$page = $_GET[URLVAR];
			foreach(scandir(CTL) as $key => $value)
			{
				if(Authenticator::authenticate($value,$page))
				{
					$pagename = $value;
				}
			}
		} 
		if($pagename === "wow")
		{
			$pagename = "error.php";
		}
		if(!defined("T"))
		{
			define('T', $pagename);
			
		}
		require TMP.'title.php';
		echo $this->head().$this->panel().$this->heading().$this->body($pagename).$this->footer(); 		 
	}
	private function head()
	{  		  
		require_once TMP.'head'.X;			 
	}
	private function panel()
	{
		require_once TMP.'panel'.X; 
		
	}
	private function heading()
	{
		require_once TMP.'header'.X;
	} 
	private function footer()
	{
		require_once TMP.'footer'.X;
	} 
	private function body($filename = "")
	{ 
		if($filename == "error.php")
		{
			echo '<div class="center white" style="padding:10px;text-align:center;">
			<p>Oooooooooh it Nuggs Sooory But <br>
			The Page You requested could not be found <br>
			Please Use The Links Provided On The Navigation Bar</p>
			<p>
			This might happen if you are have sightly mess up with the address bar
			</p>
			<p>
			This can also happen if you try to pass in some anonymous URL to the website
			</p>
			<p>
			So by this you are adviced to use the links provided by the website
			</p>
			</div>';
		}else
		{
			require_once CTL.$filename;
			 
		}		 
	}  
}?>