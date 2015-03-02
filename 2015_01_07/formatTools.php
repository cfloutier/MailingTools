<?php
require_once("tools.php");




$GLOBALS['ImagesDir'] = $ImagesDir;


function spaceLine($height)
{
	$ImagesDir = $GLOBALS['ImagesDir'];
	
	//echo '<tr><td height="'.$height.'" width="600" bgColor="#ffffff"><div style="margin:0; padding:0;"><img  width="600" height="'.$height.'"  src="'.$ImagesDir.'/dot.gif" style="display:block;overflow:hidden; width:600px; height:'.$height.'px;"></div></td></tr>';
	echo '<tr><td height="'.$height.'" width="600" bgColor="#ffffff"></td></tr>';
}

function spaceCell($width)
{
	$ImagesDir = $GLOBALS['ImagesDir'];
	
	echo '<td bgColor="#ffffff" width="'.$width.'"><div style="margin:0; padding:0;"><img width="'.$width.'" height="10" src="'.$ImagesDir.'/dot.gif" style="display:block;overflow:hidden; width:'.$width.'px;"></div></td>';
}

function disclaimer_Style()
{
	echo 'font-family:Arial, Helvetica, sans-serif; 
		font-size:10px; 
		font-weight:normal; 
		color:#a6a6a6;';
}


function bigTitle_Style()
{
	echo 'text-align:center; 
		font-family:Georgia, Garamond, serif; 
		font-size:39px; 
		font-weight:normal; 
		color:#000000;';
}


function bigTitle2_Style()
{
	echo 'text-align:center; 
		font-family:Georgia, Garamond, serif; 
		font-size:31px; 
		font-weight:normal; 
		color:#000000;';
}

function mainText_Style()
{
	echo 'text-align:center; 
	font-family:Georgia, Garamond, serif; 
	font-size:14px; 
	font-weight:normal; 
	color:#000000; 
	line-height: 150%;';
}

function mainText_StyleBold()
{
	echo 'text-align:center; font-family:Georgia, Garamond, serif; font-size:14px; font-weight:bold; color:#000000; line-height: 150%;';
}

function linkCatalog_Style()
{
	echo 'text-align:center; 
		text-decoration: underline;
		font-family:Georgia, Garamond, serif; 
		font-size:14px; 
		font-weight:normal; 
		color:#000000;
		line-height: 200%;';
}

function mainText2_Style()
{
	echo 'text-align:center; 
		font-family:Georgia, Garamond, serif; 
		font-size:12px;
		font-weight:normal; 
		color:#000000;
		line-height: 120%;';
}

function mainText3_Style()
{
	echo 'text-align:center; 
		font-family:Verdana, Arial, sans-serif; 
		font-size:12px; 
		font-weight:normal; 
		color:#000000;
		line-height: 200%;';
}

function linkStyle_Style()
{
	echo 'color:#000000;text-decoration: none;';

}
	
	
	

?>