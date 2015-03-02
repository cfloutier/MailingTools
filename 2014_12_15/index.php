<?php
// petit outil pour faire des fichiers de mailing

require_once "tools.php";
require_once "OB_FILEWRITER.php";

class MailSaver
{
	public $main="Mail.php";
	public $destDirectory = "result";
	public $imageDir = "images";
	
	private $OB_FileWriter = null;
	
	function clear()
	{
		if (!is_dir($this->destDirectory)) 
		{
			return;
		}
	
		echo "clearing <b>" .$this->destDirectory.'</b></br>';
		rmdir_recursive($this->destDirectory);
	}
	
	function deb()
	{
		echo "main : <b>" .$this->main.'</b></br>';
		echo "destDirectory : <b>" .$this->destDirectory.'</b></br>';
	}
	
	function destFile()
	{
		$Lang = getVar("Lang", "FR");
		$WithLogo = getVar("WithLogo", "false");
		
		$file = $this->destDirectory.'/index_'.$Lang;
		
		if ($WithLogo == "true")
			$file .= "_logo";
			
		$file .= ".html";
		return $file;
	}
	
	function start()
	{
		$this->absMain = curPageURL().$this->main;
		echo '<div style="
		border:3;padding:5;
		background-color:#aaaaaa;
		border-style: solid;
		border-width: 2px;">';
		
		if (!is_dir($this->destDirectory)) 
			mkdir($this->destDirectory); 
	}
	
	function copyMedias()
	{
		if (!is_dir($this->imageDir)) 
		{
			echo '<span style="color: #f00;">NO DIRECTORY ' . $this->imageDir.'<br>CANCELING !!!</span>';
			return;
		}
		
		$DestImageDir = $this->destDirectory."/".$this->imageDir;
		
		echo 'Coping image dir : <b>'.$this->imageDir.'</b> to <b>'.$DestImageDir.'</b></br>';
	
		recurse_copy($this->imageDir, $DestImageDir);
	}
	
	function saveFile()
	{
		echo "SAVING ".$this->main."</br>";
		echo 'DestFile : <b><a href="'.$this->destFile().'">'.$this->destFile().'</a></b></br>';	
		echo 'params :  <pre>';print_r($_GET);echo '</pre>';;	

		
		$this->OB_FileWriter = new OB_FileWriter($this->destFile());
		$this->OB_FileWriter->setHaltOnError(true);
		$this->OB_FileWriter->start();
		
		include($this->main);
		
		$this->OB_FileWriter->end();
	}
	
	function end()
	{
		echo '</div>';
	}
	
	function addSpace()
	{
		echo '<br/><br/><br/><br/>';
	}
	
	function showResult()
	{
		
		include ($this->destFile());
	}
}

$mailSaver = new MailSaver();
$mailSaver->main="Mail.php";
$mailSaver->destDirectory = "Mailing_artcurial_2014_12_17_v7";
$mailSaver->imageDir = "images";


//$_GET['images']='http://127.0.0.1/Mailing_2014_12_15/images';
//$_GET['images']='http://orange-unity-web.orange-labs.fr/Demos/Tof/Mailing_artcurial_2014_12_15/images/';


$Action=getVarLower("action", "none");

unset($_GET['action']);

switch($Action)
{
	case 'save':
		{
			$All=getVar("All", "false");
			
			if ($All == 'true')
			{
				unset($_GET['All']);
				$mailSaver->start();
				$mailSaver->copyMedias();
				
				$_GET['Lang']='fr';
				$_GET['WithLogo']='false';
				$mailSaver->saveFile();
				
				$_GET['Lang']='en';
				$_GET['WithLogo']='false';
				
				$mailSaver->saveFile();
				
				$_GET['Lang']='fr';
				$_GET['WithLogo']='true';
				$mailSaver->saveFile();
				
				$_GET['Lang']='en';
				$_GET['WithLogo']='true';
				$mailSaver->saveFile();
				$mailSaver->end();
				
			}
			else
			{			
				$mailSaver->start();
				$mailSaver->copyMedias();
				$mailSaver->saveFile();	
				$mailSaver->addSpace();	
				$mailSaver->end();		
				$mailSaver->showResult();					
			}
		}
		break;
	case 'clear':
		$mailSaver->clear();
		break;
}
?>

<div style="
border:3; padding:5; 
background-color:#ffffff; 
position: absolute;
right: 10px;
top: 10px;
z-index: 2;
border-style: solid;
border-width: 2px;
">
<h1>Menu sauvegarde</h1>
* <a href=".?action=clear&Lang=fr"> CLEAR ALL </a></br>
</br>
* <a href=".?action=save&Lang=fr"> fr </a></br>
* <a href=".?action=save&Lang=en"> en </a></br>
* <a href=".?action=save&Lang=fr&WithLogo=true"> fr With logo</a></br>
* <a href=".?action=save&Lang=en&WithLogo=true"> en With logo</a></br>

* <a href=".?action=save&All=true"> ALL !! </a></br>

</div>
