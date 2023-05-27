<?php
class Messanger
{
	public static function alert($message,$title="New Massage")
	{
		echo '<script language="JavaScript">dalert.alert("<h4>'.$message.'</h4>","'.$title.'");</script>';
	}
}
?>
