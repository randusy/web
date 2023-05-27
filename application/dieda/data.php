<?php 
class Data extends User
{
	 
	private $state = "";
	
	
	public function __construct($tableName,$colOne="",$valOne="",$colTwo="",$valTwo="",$colThree="",$valThree=""
								,$colFour="",$valFour="",$colFive="",$valFive="",$colSix="",$valSix="",$colSeven="",$valSeven=""
								,$colEight="",$valEight="",$colNine="",$valNine="",$colTen="",$valTen="",$colEleven="",$valEleven=""
								,$colTwelve="",$valTwelve="")
	{
		 
		$numberOfColumns = (func_num_args()-1)/2; 
		  
		try
		{
			 $this->openConnectionAndSelectDb();
		 	
			$id = $tableName."Id";
				if($numberOfColumns == 1)
				{
					 
						$valOne = $this->prepareString(trim($valOne)); 
					
					if(is_numeric($valOne))
					{
						
					}else
					{
						$valOne = "'".$valOne."'";
					}
						 
						$sql = "INSERT INTO $tableName($id,`$colOne`)
						VALUES(NULL,$valOne)";
						 
							if($this->query($sql))
							{
								$this->state  = "sent";
							}else
								{
									$this->state  = "Query Failure";
								}
							 
				}else if($numberOfColumns == 2)
				{
					 
					
					 
						$valOne = $this->prepareString(trim($valOne));
						$valTwo = $this->prepareString(trim($valTwo));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					} 
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`)
						VALUES(NULL,$valOne,$valTwo)";
						 
							if($this->query($sql))
							{
								$this->state  = "sent";
							}else
								{
									$this->state  = "Query Failure";
								} 
				}else if($numberOfColumns == 3)
				{ 
						$valOne = $this->prepareString(trim($valOne));
						$valTwo = $this->prepareString(trim($valTwo));
						$valThree = $this->prepareString(trim($valThree));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					} 
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`)
						VALUES(NULL,$valOne,$valTwo,$valThree)";
							$this->query($sql); 
							$this->state  = "sent"; 
				}else if($numberOfColumns == 4)
				{ 
						$valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour)); 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					} 
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour)";
						 
							$this->query($sql);
							 
							$this->state  = "sent";
							  
				}else if($numberOfColumns == 5)
				{
					 
						 $valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}	
						 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive)";
						 $this->query($sql);
						$this->state  = "sent";
							 
						 
				}else if($numberOfColumns == 6)
				{
					 
						 $valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}	
						 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,$colFive,$colSix)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix)";
						 
							$this->query($sql);
								$this->state  = "sent";
							 
							
						 
					 
				}else if($numberOfColumns == 7)
				{
					
					 
						 $valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}	
						 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven)";
						 
							 $this->query($sql);
								$this->state  = "sent";
							 
							
						 
				}else if($numberOfColumns == 8)
				{
					
					 
						$valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					$valEight = $this->prepareString(trim($valEight));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}
					if(is_numeric($valEight))
					{}else
					{
						$valEight = "'".$valEight."'";
					}	
						 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`,`$colEight`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven,$valEight)";
						 
							$this->query($sql);
								$this->state  = "sent";
							 
							
						 
					 
				}else if($numberOfColumns == 9)
				{
					 
						$valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					$valEight = $this->prepareString(trim($valEight));
					$valNine = $this->prepareString(trim($valNine));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}
					if(is_numeric($valEight))
					{}else
					{
						$valEight = "'".$valEight."'";
					}
					if(is_numeric($valNine))
					{}else
					{
						$valNine = "'".$valNine."'";
					}	
						 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`,`$colEight`,`$colNine`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven,$valEight,$valNine)";
						 
							$this->query($sql);
								$this->state  = "sent";
							 
							
						 
					 
				}else if($numberOfColumns == 10)
				{
					
					 
						$valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					$valEight = $this->prepareString(trim($valEight));
					$valNine = $this->prepareString(trim($valNine));
					$valTen = $this->prepareString(trim($valTen));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}
					if(is_numeric($valEight))
					{}else
					{
						$valEight = "'".$valEight."'";
					}
					if(is_numeric($valNine))
					{}else
					{
						$valNine = "'".$valNine."'";
					}	
					if(is_numeric($valTen))
					{}else
					{
						$valTen = "'".$valTen."'";
					}	 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`,`$colEight`,`$colNine`,
						`$colTen`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven,$valEight,$valNine,$valTen)";
					 
							$this->query($sql);
								$this->state  = "sent";
						 
				}else if($numberOfColumns == 11)
				{ 
						$valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					$valEight = $this->prepareString(trim($valEight));
					$valNine = $this->prepareString(trim($valNine));
					$valTen = $this->prepareString(trim($valTen));
					$valEleven = $this->prepareString(trim($valEleven));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}
					if(is_numeric($valEight))
					{}else
					{
						$valEight = "'".$valEight."'";
					}
					if(is_numeric($valNine))
					{}else
					{
						$valNine = "'".$valNine."'";
					}	
					if(is_numeric($valTen))
					{}else
					{
						$valTen = "'".$valTen."'";
					}
					if(is_numeric($valEleven))
					{}else
					{
						$valEleven = "'".$valEleven."'";
					}	 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`,`$colEight`,`$colNine`,
						`$colTen`,`$colEleven`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven,$valEight,$valNine,$valTen,$valEleven)";
						 
							$this->query($sql);
								$this->state  = "sent";
						 
				}else if($numberOfColumns == 12)
				{ 
						 $valOne = $this->prepareString(trim($valOne));
					$valTwo = $this->prepareString(trim($valTwo));
					$valThree = $this->prepareString(trim($valThree));
					$valFour = $this->prepareString(trim($valFour));
					$valFive = $this->prepareString(trim($valFive));
					$valSix = $this->prepareString(trim($valSix)); 
					$valSeven = $this->prepareString(trim($valSeven));
					$valEight = $this->prepareString(trim($valEight));
					$valNine = $this->prepareString(trim($valNine));
					$valTen = $this->prepareString(trim($valTen));
					$valEleven = $this->prepareString(trim($valEleven));
					$valTwelve = $this->prepareString(trim($valTwelve));
					 
					 if(is_numeric($valOne))
					{}else
					{
						$valOne = "'".$valOne."'";
					}
					if(is_numeric($valTwo))
					{}else
					{
						$valTwo = "'".$valTwo."'";
					}
					if(is_numeric($valThree))
					{}else
					{
						$valThree = "'".$valThree."'";
					}
					if(is_numeric($valFour))
					{}else
					{
						$valFour = "'".$valFour."'";
					}
					if(is_numeric($valFive))
					{}else
					{
						$valFive = "'".$valFive."'";
					}
					if(is_numeric($valSix))
					{}else
					{
						$valSix = "'".$valSix."'";
					}
					if(is_numeric($valSeven))
					{}else
					{
						$valSeven = "'".$valSeven."'";
					}
					if(is_numeric($valEight))
					{}else
					{
						$valEight = "'".$valEight."'";
					}
					if(is_numeric($valNine))
					{}else
					{
						$valNine = "'".$valNine."'";
					}	
					if(is_numeric($valTen))
					{}else
					{
						$valTen = "'".$valTen."'";
					}
					if(is_numeric($valEleven))
					{}else
					{
						$valEleven = "'".$valEleven."'";
					}
					if(is_numeric($valTwelve))
					{}else
					{
						$valTwelve = "'".$valTwelve."'";
					}	 
						
						$sql = "INSERT INTO $tableName($id,`$colOne`,`$colTwo`,`$colThree`,`$colFour`,`$colFive`,`$colSix`,`$colSeven`,`$colEight`,`$colNine`,
						`$colTen`,`$colEleven`,`$colTwelve`)
						VALUES(NULL,$valOne,$valTwo,$valThree,$valFour,$valFive,$valSix,$valSeven,$valEight,$valNine,$valTen,$valEleven,
						$valTwelve)";
						 
							$this->query($sql);
								$this->state  = "sent";
						 
				}
			}catch(Exception $e)
				{
					throw new Exception($e->getMessage());
				} 
		$this->closeConnection();
		  
	}
	public function __toString()
	{
		return $this->state;
	}
	
}
?>
