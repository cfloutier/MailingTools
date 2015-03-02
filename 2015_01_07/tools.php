<?php

function getVar($var,$val)
{
	if(isset($_GET[$var]))
	{
		return $_GET[$var];
	}
	
	return $val;
}

function getVarLower($var,$val)
{
	if(isset($_GET[$var]))
	{
		return strtolower($_GET[$var]);
	}
	
	return strtolower($val);
}

	
	
	

function DbgPrintArray($array)
{
    echo 'DbgPrintArray';
    echo '<pre>';print_r($array);echo '</pre>';
}

function DbgWarning($txt)
{
    echo '<div style="border:2px solid red; color:#FF0000; font-size:100%;"> Debug :';
    echo $txt;
    echo '</div>';
}

function DbgTrace($txt)
{
    echo '<div style="border:1px solid; font-size:120%; font-weight:bold;"> Debug :<pre>';
    echo htmlspecialchars($txt);
    echo '</pre></div>';
}


function curPageURL() 
{
    $script = $_SERVER["SCRIPT_NAME"];
    $script = str_replace('index.php', '', $script);
    
    
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") 
	{
		$pageURL .= "s";
	}
	$pageURL .= "://";
	
	if ($_SERVER["SERVER_PORT"] != "80") 
	{
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$script;
	} 
	else 
	{
		$pageURL .= $_SERVER["SERVER_NAME"].$script;
	}
	
	return $pageURL;
}


function rebuildGet($key, $value)
{
    $myParams = array();
    foreach ($_GET as $k=>$v)
    {
         $myParams[$k]=$v;
    }
    $myParams[$key]=$value;
    
    $query = http_build_query($myParams);
    return '?'.$query;
}

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

function rmdir_recursive($dir)
{
 //Liste le contenu du répertoire dans un tableau
 $dir_content = scandir($dir);
 //Est-ce bien un répertoire?
 if($dir_content !== FALSE){
  //Pour chaque entrée du répertoire
  foreach ($dir_content as $entry)
  {
   //Raccourcis symboliques sous Unix, on passe
   if(!in_array($entry, array('.','..'))){
    //On retrouve le chemin par rapport au début
    $entry = $dir . '/' . $entry;
    //Cette entrée n'est pas un dossier: on l'efface
    if(!is_dir($entry)){
     unlink($entry);
    }
    //Cette entrée est un dossier, on recommence sur ce dossier
    else{
     rmdir_recursive($entry);
    }
   }
  }
 }
 //On a bien effacé toutes les entrées du dossier, on peut à présent l'effacer
 rmdir($dir);
}    

  
        ?>