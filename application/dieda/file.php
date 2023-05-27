<?php 
class File
{ 
	public static function fileStyleSheet($styleSheetFileName)
	{
		return '<link  rel="stylesheet" type="text/css" media="all"  href="'.CSS.$styleSheetFileName.'.css" />';
	} 
	public static function fileJavaScript($javaScriptFileName)
	{
		return '<script src="'.JS.$javaScriptFileName.'.js" language="javascript"></script>';
	}
	public static function fileIconImage($iconImageName)
	{
		return '<link rel="icon" href="'.$iconImageName.'">';
	}
	 
}?>