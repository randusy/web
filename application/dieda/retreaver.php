<?php

class Retreaver extends Database
{
	public $rows;  
	public $retreaved = false;
	
	public function __construct($extra="",$table="",$colOne="",$valOne="",$colTwo="",$valTwo="",$colThree="",$valThree="",$colFour="",
							$valFour="",$colFive="",$valFive="",$colSix="",$valSix="",$colSeven="",$valSeven="")
	{
		
		$state = "";
		 
		$args = func_num_args() -1;
		 try
		 {
		 $this->openConnectionAndSelectDb(); 
		if($args === 1)
		{
			$sql = "SELECT  * FROM $table $extra";
			 
				$this->query($sql);
				$state = "retreaved";
							 
			 
		}else if($args === 3)
		{
			if(is_numeric($valOne))
			{
				
			}else
			{
				$valOne = "'".$valOne."'";
			}
			$sql = "SELECT  * FROM $table WHERE $colOne=$valOne $extra";
			 
				$this->query($sql);
				$state = true;
			 
		}
		else if($args === 5)
		{
			if(is_numeric($valOne))
			{
				 
			}else
			{
				$valOne = "'".$valOne."'";
			}
			if(is_numeric($valTwo))
			{
				 
			}else
			{
				 $valTwo = "'".$valTwo."'";
			}
			$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo $extra";
		 
				$this->query($sql);
				$state = true;
			 
		}
		else if($args === 7)
		{
			if(is_numeric($valOne))
			{
				
			}else
			{
				$valOne = "'".$valOne."'";
			}
			if(is_numeric($valTwo))
			{
				
			}else
			{
				$valTwo = "'".$valTwo."'";
			}
			if(is_numeric($valThree))
			{
				
			}else
			{
				$valThree = "'".$valThree."'";
			}
			$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree $extra";
			 
				$this->query($sql);
				$state = true;
			 
		}
		else if($args === 9)
		{
			if(is_numeric($valOne))
			{
				
			}else
			{
				$valOne = "'".$valOne."'";
			}
			if(is_numeric($valTwo))
			{
				
			}else
			{
				$valTwo = "'".$valTwo."'";
			}
			if(is_numeric($valThree))
			{
				
			}else
			{
				$valThree = "'".$valThree."'";
			}
			if(is_numeric($valFour))
			{
				
			}else
			{
				$valFour = "'".$valFour."'";
			}
			$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree AND $colFour=$valFour $extra";
		 
				$this->query($sql);
				$state = true;
		 
		}
		else if($args === 11)
		{
					if(is_numeric($valOne))
					{
						
					}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{
						
					}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{
						
					}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{
						
					}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{
						
					}else
					{
						$valFive = "'".$valFive."'";
					}
					$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree AND $colFour=$valFour AND $colFive=$valFive $extra";
			 
				$this->query($sql);
				$state = true;
			 
		}
		else if($args === 13)
		{
			if(is_numeric($valOne))
				{
					
				}else
				{
					$valOne = "'".$valOne."'";
				}
				if(is_numeric($valTwo))
				{
					
				}else
				{
					$valTwo = "'".$valTwo."'";
				}
				if(is_numeric($valThree))
				{
					
				}else
				{
					$valThree = "'".$valThree."'";
				}
				if(is_numeric($valFour))
				{
					
				}else
				{
					$valFour = "'".$valFour."'";
				}
				if(is_numeric($valFive))
				{
					
				}else
				{
					$valFive = "'".$valFive."'";
				}
				if(is_numeric($valSix))
				{
					
				}else
				{
					$valSix = "'".$valSix."'";
				}
				$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree AND $colFour=$valFour AND $colFive=$valFive AND $colSix=$valSix $extra";
			 
				$this->query($sql);
				$state = true;
			 
				
		}
		else if($args === 15)
		{
			if(is_numeric($valOne))
				{
					
				}else
				{
					$valOne = "'".$valOne."'";
				}
				if(is_numeric($valTwo))
				{
					
				}else
				{
					$valTwo = "'".$valTwo."'";
				}
				if(is_numeric($valThree))
				{
					
				}else
				{
					$valThree = "'".$valThree."'";
				}
				if(is_numeric($valFour))
				{
					
				}else
				{
					$valFour = "'".$valFour."'";
				}
				if(is_numeric($valFive))
				{
					
				}else
				{
					$valFive = "'".$valFive."'";
				}
				if(is_numeric($valSix))
				{
					
				}else
				{
					$valSix = "'".$valSix."'";
				}
				if(is_numeric($valSeven))
				{
					
				}else
				{
					$valSix = "'".$valSeven."'";
				}
				$sql = "SELECT  * FROM $table WHERE $colOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree AND $colFour=$valFour AND $colFive=$valFive AND $colSix=$valSix $colSeven=$valSeven $extra";
		 
				$this->query($sql);
				$state = true;
			 
			}
			$this->closeConnection();
		 }catch(Exception $e)
		 {
		 	 throw new Exception($e->getMessage());
		 }
		if($state == true)
		{
			$this->retreaved = $this->retreaveData();
		}
	}
		
	private function retreaveData()
	{
		$state = false;
	 
			if($this->fetchArray())
			{
				$this->row = $this->rows; 
				$state = true;
			} 
		 
		return $state;
	}
	 
}
?>
