<?php 
class Page
{
	public $filename;
	public $num;

		public function __construct()
		{
			 
			if(isset($_GET['now']))
			{
				if(crypt("karisarandusy",$_GET['now']) === $_GET['now'])
				{
					$this->filename = "home";
					$this->num = 0;
				}
				else
				{
					$this->filename = "";
					$this->num = "Page Could Not Be Found";
				} 
			}
			else
			{
				$this->filename = "error";
				$this->num = "Page Not Found";
			}
	 
		}
	 
}
?>
