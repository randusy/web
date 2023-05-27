<?php 
class Update extends User
{
	private $status = "";
	
	public function __construct($numberOfColumns,$numberOfConditions,$tablename,$colOne,$valOne,$colTwo="",$valTwo="",$colThree="",$valThree="",
	$colFour="",$valFour="",$colFive="",$valFive="",$colSix="",$valSix="",$colSeven="",$valSeven="",$colEight="",$valEight=""
	,$colNine="",$valNine="",$colTen="",$valTen="")
	{ 
		try 
		{
		 $this->openConnectionAndSelectDb();
		if(is_numeric($valOne))
		{
			$valOne = $this->prepareString(trim($valOne));
		}else
		{
			$valOne = $this->prepareString(trim($valOne));
			$valOne = "'".$valOne."'";
		}
		if(is_numeric($valTwo))
		{
			$valTwo = $this->prepareString(trim($valTwo));
		}else
		{
			$valTwo = $this->prepareString(trim($valTwo));
			$valTwo = "'".$valTwo."'";
		}
		if(is_numeric($valThree))
		{
			$valThree = $this->prepareString(trim($valThree));
		}else
		{
			$valThree = $this->prepareString(trim($valThree));
			$valThree = "'".$valThree."'";
		}
		if(is_numeric($valFour))
		{
			$valFour = $this->prepareString(trim($valFour));
		}else
		{
			$valFour = $this->prepareString(trim($valFour));
			$valFour = "'".$valFour."'";
		}
		if(is_numeric($valFive))
		{
			$valFive = $this->prepareString(trim($valFive));
		}else
		{
			$valFive = $this->prepareString(trim($valFive));
			$valFive = "'".$valFive."'";
		}
		if(is_numeric($valSix))
		{
			$valSix = $this->prepareString(trim($valSix));
		}else
		{
			$valSix = $this->prepareString(trim($valSix));
			$valSix = "'".$valSix."'";
		}
		if(is_numeric($valSeven))
		{
			$valSeven = $this->prepareString(trim($valSeven));
		}else
		{
			$valSeven = $this->prepareString(trim($valSeven));
			$valSeven = "'".$valSeven."'";
		}
		if(is_numeric($valEight))
		{
			$valEight = $this->prepareString(trim($valEight));
		}else
		{
			$valEight = $this->prepareString(trim($valEight));
			$valEight = "'".$valEight."'";
		}
		if(is_numeric($valNine))
		{
			$valNine = $this->prepareString(trim($valNine));
		}else
		{
			$valNine = $this->prepareString(trim($valNine));
			$valNine = "'".$valNine."'";
		}
		if(is_numeric($valTen))
		{
			$valTen = $this->prepareString(trim($valTen));
		}else
		{
			$valTen = $this->prepareString(trim($valTen));
			$valTen = "'".$valTen."'";
		}
		 
				if($numberOfColumns == 1)
				{
					 
					 
					if($numberOfConditions == 1)
					{
						$sql = "UPDATE `$tablename` SET `$colOne`=$valOne WHERE `$colTwo`=$valTwo"; 
					 
						 
							$this->query($sql); 
							$this->status = "updated";
						 
					}else if($numberOfConditions == 2)
					{
						$sql = "UPDATE `$tablename` SET `$colOne`=$valOne WHERE `$colTwo`=$valTwo AND `$colThree`=$valThree"; 
						 
							$this->query($sql); 
							$this->status = "updated";
						 
					}
					else if($numberOfConditions == 3)
					{
						$sql = "UPDATE `$tablename` SET `$colOne`=$valOne WHERE `$colTwo`=$valTwo AND `$colThree`=$valThree AND `$colFour`=$valFour"; 
						 
							$this->query($sql); 
							$this->status = "updated";
						 
					}
					else if($numberOfConditions == 4)
					{
						$sql = "UPDATE `$tablename` SET `$colOne`=$valOne WHERE `$colTwo`=$valTwo AND `$colThree`=$valThree AND `$colFour`=$valFour
						AND `$colFive`=$valFive"; 
						 
							$this->query($sql); 
							$this->status = "updated";
						 
					}
					else {throw new Exception("Number Of Conditions Must Be Less Than Four");
					}
				}else if($numberOfColumns == 2)
				{
							if($numberOfConditions == 1)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo WHERE `$colThree`=$valThree"; 
								  
									$this->query($sql); 
									$this->status = "updated";
							 
							}else if($numberOfConditions == 2)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo WHERE `$colThree`=$valThree AND 
								`$colFour`=$valFour"; 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}
							else if($numberOfConditions == 3)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo WHERE `$colThree`=$valThree AND 
								`$colFour`=$valFour AND `$colFive`=$valFive"; 
								 
										$this->query($sql); 
										$this->status = "updated";
								 
							}
							else if($numberOfConditions == 4)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo WHERE `$colThree`=$valThree AND 
								`$colFour`=$valFour AND `$colFive`=$valFive AND `$colSix`=$valSix"; 
								 
										$this->query($sql); 
										$this->status = "updated";
								 
							}else
							{
								throw new Exception("Number Of Conditions Must Be Less Than Four");
								
							}
					 
				}else if($numberOfColumns == 3)
				{ 
							if($numberOfConditions == 1)
							{ 
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								WHERE `$colFour`=$valFour"; 
								$response = $this->query($sql);
								 
										$this->query($sql); 
										$this->status = "updated";
								 
							}else if($numberOfConditions == 2)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo , `$colThree`=$valThree WHERE 
								`$colFour`=$valFour AND `$colFive`=$valFive"; 
								 
										$this->query($sql); 
										$this->status = "updated";
									 
							}
							else if($numberOfConditions == 3)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo , `$colThree`=$valThree WHERE 
								`$colFour`=$valFour AND `$colFive`=$valFive AND `$colSix`=$valSix";
								 
										$this->query($sql); 
										$this->status = "updated";
									 
							}
							else if($numberOfConditions == 4)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo , `$colThree`=$valThree WHERE 
								`$colFour`=$valFour AND `$colFive`=$valFive AND `$colSix`=$valSix AND `$colSeven`=$valSeven"; 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else
							{
								 throw new Exception("Number Of Conditions Must Be Less Than Four");
								 
							}
					 
				}else  if($numberOfColumns == 4)
				{
							if($numberOfConditions == 1)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour WHERE `$colFive`=$valFive"; 
								 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else if($numberOfConditions == 2)
							{
							$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour WHERE `$colFive`=$valFive AND `$colSix`=$valSix";  
								 
										$this->query($sql); 
										$this->status = "updated";
									 
							}
							else if($numberOfConditions == 3)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour WHERE `$colFive`=$valFive AND `$colSix`=$valSix AND `$colSeven`=$valSeven";
								 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}
							else if($numberOfConditions == 4)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour WHERE `$colFive`=$valFive AND `$colSix`=$valSix AND `$colSeven`=$valSeven
								AND `$colEight`=$valEight"; 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else
							{
								throw new Exception("Number Of Conditions Must Be Less Than Four");
							}
				}else  if($numberOfColumns == 5)
				{
							if($numberOfConditions == 1)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive WHERE `$colSix`=$valSix"; 
						 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else if($numberOfConditions == 2)
							{
							$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive WHERE `$colSix`=$valSix AND `$colSeven`=$valSeven"; 
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}
							else if($numberOfConditions == 3)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive WHERE `$colSix`=$valSix AND `$colSeven`=$valSeven
								AND `$colEight`=$valEight";
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}
							else if($numberOfConditions == 4)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive WHERE `$colSix`=$valSix AND `$colSeven`=$valSeven
								AND `$colEight`=$valEight AND `$colNine`=$valNine";
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else
							{
								 throw new Exception("Number Of Conditions Must Be Less Than Four");
							}
			}else if($numberOfColumns == 6)
				{
							if($numberOfConditions == 1)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive `$colSix`=$valSix WHERE `$colSeven`=$valSeven"; 
								 
										$this->query($sql); 
										$this->status = "updated";
								 
							}else if($numberOfConditions == 2)
							{
							$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive `$colSix`=$valSix WHERE `$colSeven`=$valSeven 
								AND `$colEight`=$valEight"; 
								$response = $this->query($sql);
								 
									$this->query($sql); 
									$this->status = "updated";
								 
							}
							else if($numberOfConditions == 3)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive `$colSix`=$valSix WHERE `$colSeven`=$valSeven 
								AND `$colEight`=$valEight AND `$colNine`=$valNine";
								$response = $this->query($sql);
							 
									$this->query($sql); 
									$this->status = "updated";
							 
							}
							else if($numberOfConditions == 4)
							{
								$sql = "UPDATE `$tablename` SET `$colOne`=$valOne,`$colTwo`=$valTwo,`$colThree`=$valThree 
								, `$colFour`=$valFour , `$colFive`=$valFive `$colSix`=$valSix WHERE `$colSeven`=$valSeven 
								AND `$colEight`=$valEight AND `$colNine`=$valNine AND `$colTen`=$valTen";
								$response = $this->query($sql);
							 
									$this->query($sql); 
									$this->status = "updated";
								 
							}else
							{
								 throw new Exception("Number Of Conditions Must Be Less Than Four");
							}
				}else 
				{
					throw new Exception("Number Of Columns Must Be Less Than Six"); 
				}
				
			$this->closeConnection();
			
		}catch(Exception $error)
		{
			throw new Exception($error->getMessage());
		} 
	}
	public function __toString()
	{
		return $this->status;
	}
}
?>
