<?php 
class Eraser extends User
{
	 
	private $state = "";
	
	public function __construct($table,$idOrColOne,$valOne="",$colTwo="",$valTwo="",$colThree="",$valThree="",$colFour="",
							$valFour="")
	{
		  $args = func_num_args() - 1;		   
		  $tableId =$table."Id";
		  $state = "";
		  try{
		  		$this->openConnectionAndSelectDb();
				$table = $this->prepareString($table);
				$idOrColOne = $this->prepareString($idOrColOne);
				$valOne = $this->prepareString($valOne);
				$colTwo = $this->prepareString($colTwo);
				$valTwo = $this->prepareString($valTwo);
				$colThree = $this->prepareString($colThree);
				$valThree = $this->prepareString($valThree);
				$colFour = $this->prepareString($colFour);
				$colFour = $this->prepareString($colFour);
		  if($args === 1)
		  {
		  	 $sql = "SELECT * FROM $table WHERE $tableId=$idOrColOne";
				 try{
				   $this->query($sql);
				  
				 	if($this->fetchArray())
					{ 
						 
						$sql = "DELETE FROM $table WHERE $tableId=$idOrColOne";
						$this->query($sql);
						  
						$state = "erased";
						 
					}else{
						throw new Exception("empty");
					}
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }   }else if($args === 2)
		  {
		  	if(is_numeric($valOne))
			{
				
			}else
			{
				$valOne = "'".$valOne."'";
			} 
			 	
					$sql = "SELECT * FROM $table WHERE $idOrColOne=$valOne"; 
				 try{
				   $this->query($sql);
				  
				 	if($this->fetchArray())
					{ 
						$sql = "DELETE FROM $table WHERE $idOrColOne=$valOne";  
						$this->query($sql);
						  
						$state = "erased";
						 
					}else{
						throw new Exception("empty");
					}
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }
		  }
		  else if($args === 4)
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
				
				$sql = "SELECT * FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo";
				 try{
				   $this->query($sql);
				  
				 	if($this->fetchArray())
					{ 
						$sql = "DELETE FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo"; 
						$this->query($sql);
						  
						$state = "erased";
						 
					}else{
						throw new Exception("empty");
					}
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }
		  }else if($args === 6)
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
		   
				$sql = "SELECT * FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree";
				 try{
				   $this->query($sql);
				  
				 	if($this->fetchArray())
					{ 
						$sql = "DELETE FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree"; 
						$this->query($sql);
						  
						$state = "erased";
						 
					}else{
						throw new Exception("empty");
					}
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }
				
		  }else if($args === 8)
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
		 
					
					$sql = "SELECT * FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree 
								AND $colFour=$valFour";
				 try{
				   $this->query($sql);
				  
				 	if($this->fetchArray())
					{ 
						$sql = "DELETE FROM $table WHERE $idOrColOne=$valOne AND $colTwo=$valTwo AND $colThree=$valThree 
								AND $colFour=$valFour"; 
						$this->query($sql);
						  
						$state = "erased";
						 
					}else{
						throw new Exception("empty");
					}
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }catch(Exception $e)
				 {
				 	throw new Exception($e->getMessage());
					 
				 }
					
					
		  }
			$this->closeConnection();
		  }catch(Exception $e)
		  {
		  	throw new Exception($e->getMessage());
			  
		  } 
		   
	}
	public function __toString()
	{
		return $this->state;
	}
}
?>
