<?php 

$Subject = '<%message.Subject%>';
				
$linkToHttpMail="<%syslink_message_read url='/public/read_message.jsp'%>";
$HeaderURL="URL header";
$ImagesDir=getVar("images", "images");
$Lang=getVar("Lang", "fr");
$WithLogo=getVar("WithLogo", "false");
$unsubscribeLink="<%syslink_profile_edit url='/public/preference-center.jsp'%>";

require_once("formatTools.php");
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?=$Subject?></title>
	<style type="text/css">
<?php require("style.css"); ?>
	</style>
</head>
<body bgcolor="#ffffff">
<center>
<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<!--------------------------------->
<!---------First HEADER------------>
<!--------------------------------->
   <?php spaceLine(10); ?>
   <tr>  
		<td align="center" style="line-height:12px;">
			<span style="<?php disclaimer_Style();?>">
			
			
<?php if ($Lang=='fr') { ?>
			
Si le message ne s'affiche pas correctement, merci de suivre 
<a href="<?=$linkToHttpMail?>" style="<?php linkStyle_Style();?>" target="_blank" >ce lien</a>.<br/>
Pour être sûr de recevoir les emails de Monte-Carlo Société des Bains de Mer, nous vous conseillons <br/>
d'ajouter e-news@news.sbm.mc à votre carnet d'adresse</span>

<?php } else  { ?>

If you are unable to read this e-mail, please&nbsp;: <a href="<?=$linkToHttpMail?>" target="_blank">follow this link</a>.</span><br />

<?php } // end isFR ?>

		</td>
    </tr>
	<?php spaceLine(5); ?> 
	
<!-------------END----------------->
<!----------First HEADER----------->
<!-------------END----------------->	


<!--------------------------------->
<!-------------TITLE--------------->
<!--------------------------------->	  
	<?php spaceLine(20); ?>
	<tr><td>
	
<?php if ($Lang=='fr') { ?>	
<a href="http://fr.montecarlosbm.com/?xtor=ES-8111" target="_blank">
<?php } else  { ?>
	<a href="http://www.montecarlosbm.com/" target="_blank">
<?php } // end isFR ?>		
			<img src="<?=$ImagesDir;?>/mc-logo.jpg" alt="Monte Carlo" style="display:block;overflow:hidden; width:100%; height:auto;" title="Monte Carlo">
		</a>
	</td></tr>
	<?php spaceLine(10); ?>
	<tr><td>

<?php if ($Lang=='fr') { ?>	
<a href="http://fr.montecarlosbm.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/" target="_blank">
<?php } else  { ?>
	<a href="http://www.montecarlosbm.com/news/hotel-de-paris-monte-carlo-furniture-auction/" target="_blank">
<?php } // end isFR ?>	
			<img src="<?=$ImagesDir;?>/HotelDeParis.jpg" alt="Hotel de Paris" style="display:block;overflow:hidden; width:100%; height:auto;" title="Hotel de Paris">
		</a>
	</td></tr>
	<?php spaceLine(20); ?>	  
  
<!-----------END------------------->
<!----------TITLE------------------>
<!----------END-------------------->

<!--------------------------------->
<!-------------BODY---------------->
<!--------------------------------->

	<?php spaceLine(10); ?>
  <tr>  
    <td><center style="<?php bigTitle_Style();?>" >
	
	
<?php if ($Lang=='fr') { ?>	
<a style="<?php linkStyle_Style();?>" href="http://fr.montecarlosbm.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/" target="_blank">
Vente aux Enchères</a>
<?php } else  { ?>
<a style="<?php linkStyle_Style();?>" href="http://www.montecarlosbm.com/news/hotel-de-paris-monte-carlo-furniture-auction/" target="_blank">
SALE BY AUCTION</a>
<?php } // end isFR ?>	
	</center></td>
  </tr>
 <?php spaceLine(18); ?>
   <tr>  
    <td><center style="<?php bigTitle2_Style();?>" >Save the Date</center></td>
  </tr>
	<?php spaceLine(20); ?>
	<tr><td>
		<center style="<?php mainText_Style();?>" > 	
<?php if ($Lang=='fr') { ?>	

Dans le cadre de votre programme Cercle Monte-Carlo,<br/>
Artcurial et Monte-Carlo Société des Bains de Mer<br/>
ont le plaisir de vous inviter à la vente aux enchères</br>
du mobilier de l’Hôtel de Paris</br>

<?php } else  { ?>

As a member of the Cercle Monte-Carlo programme</br>
Artcurial and Monte-Carlo Société des Bains de Mer</br>
are pleased to invite you to a sale of furniture from the Hôtel de Paris</br>

<?php } // end isFR ?>

		</center></td></tr>
	<?php spaceLine(10); ?>
    <tr><td>
		<center style="<?php mainText_Style();?>"> 
		
<?php if ($Lang=='fr') { ?>		
		Du dimanche 25 au vendredi 30 janvier 2015</br>
<?php } else  { ?>
		From 25 to 30 January 2015</br>
<?php } // end isFR ?>

		</center></td></tr> 
	<?php spaceLine(30); ?>
	<tr><td>
<?php if ($Lang=='fr') { ?>	
<a href="http://fr.montecarlosbm.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/" target="_blank">
<?php } else  { ?>
	<a href="http://www.montecarlosbm.com/news/hotel-de-paris-monte-carlo-furniture-auction/" target="_blank">
<?php } // end isFR ?>		
	<img src="<?=$ImagesDir;?>/bigPicture.jpg" alt="Hotel de Paris - Monte Carlo" style="display:block;overflow:hidden; width:100%; height:auto;" title="Hotel de Paris - Monte Carlo">
	</a>
	</td></tr>
	<?php spaceLine(20); ?>
    <tr><td>
		<center style="<?php mainText2_Style();?>" > 
<?php if ($Lang=='fr') { ?>	
Exposition publique des lots du 21 au 24 janvier 2015,<br/>
de 10h à 19h dont nocturne le 23 janvier jusqu’à 21h
<?php } else  { ?>
Public viewing from 21 to 24 January 2015,<br/>
10 a.m. to 7 p.m., evening view 23 January until 9 p.m.
<?php } // end isFR ?>	
		</center>
	</td></tr> 
	<?php spaceLine(15); ?>
	<tr><td>
		<center>
		<a href="http://www.artcurial.com/">
			<img src="<?=$ImagesDir;?>/ARTCURIAL.jpg" alt="ArtCurial" style="display:block;overflow:hidden; width:135px; height:70px;" title="ArtCurial">
		</a>
		</center>
	</td></tr>

	<tr><td>
		<center style="<?php mainText3_Style();?>" > 
			
<?php if ($Lang=='fr') { ?>		
		Inscription à la vente : T. +33 1 42 99 20 51 | <a style="<?php linkStyle_Style();?>" href="mailto:E.bids@artcurial.com">E.bids@artcurial.com</a> | <a style="<?php linkStyle_Style();?>" href="http://www.artcurial.com">www.artcurial.com</a>
<?php } else  { ?>
		Registration : T. +33 1 42 99 20 51 | <a style="<?php linkStyle_Style();?>" href="mailto:E.bids@artcurial.com">E.bids@artcurial.com</a> | <a style="<?php linkStyle_Style();?>" href="http://www.artcurial.com">www.artcurial.com</a>
<?php } // end isFR ?>	

		
		</center>
	</td></tr> 
	<?php spaceLine(20); ?>
<!-------------END----------------->
<!-------------BODY---------------->
<!-------------END----------------->


<!--------------------------------->
<!------------FOOTER--------------->
<!--------------------------------->
	
		

		
<?php spaceLine(5); ?>
	<tr><td>
	
<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFFFF">

	<tr>
	<?php spaceCell(135); ?>
	<td width="100%">
	<center>
	<!-- Barre de liens -->
	
<?php if ($Lang=='fr') { ?>		
			<a href="http://fr.montecarlosbm.com/?xtor=ES-8111">
<?php } else  { ?>
			<a href="http://www.montecarlosbm.com/">
<?php } // end isFR ?>			
			<img src="<?=$ImagesDir;?>/link_Montecarlo.jpg" alt="link Montecarlo bg" style="display:block;overflow:hidden; width:190px; height:20px;" title="link Montecarlo bg">
		</a>
	
	
<a href="https://www.facebook.com/MonteCarloSBM"><img src="<?=$ImagesDir;?>/fb.jpg" alt="facebook" title="facebook"></a><a href="https://twitter.com/MonteCarloSBM"><img src="<?=$ImagesDir;?>/twitter.jpg" alt="twitter" title="twitter"></a><a href="http://instagram.com/montecarlosbm"><img src="<?=$ImagesDir;?>/instagram.jpg" alt="instagram" title="instagram"></a><a href="https://fr.linkedin.com/company/monte-carlo-sbm---soci-t-des-bains-de-mer"><img src="<?=$ImagesDir;?>/LinkedIn.jpg" alt="LinkedIn" title="LinkedIn"></a><a href="https://www.youtube.com/user/SBMmonaco"><img src="<?=$ImagesDir;?>/youtube.jpg" alt="YouTube" title="YouTube"></a><a href="https://plus.google.com/+Montecarlosbm/posts"><img src="<?=$ImagesDir;?>/gplus.jpg" alt="Google Plus" title="Google Plus"></a>
	</center>
	</td>
	
<?php if ($WithLogo=='true') { ?>	
<td>
<?php if ($Lang=='fr') { ?>		
		<a href="http://fr.hoteldeparismontecarlo.com/programme-de-fidelite-cercle-monte-carlo/"><img src="<?=$ImagesDir;?>/LeCercle.jpg" alt="Le Cercle" style="display:block;overflow:hidden; width:135px; height:70px;" title="Le Cercle">
<?php } else  { ?>
		<a href="http://www.hoteldeparismontecarlo.com/monte-carlo-cercle-english-2/"><img src="<?=$ImagesDir;?>/LeCercle.jpg" alt="Le Cercle" style="display:block;overflow:hidden; width:135px; height:70px;" title="Le Cercle"></a>
<?php } // end isFR ?>			
		</td>
	
<?php } else {?>
	<?php spaceCell(135); ?>
<?php } ?>
</tr>
</table>


	</td></tr>
	<?php spaceLine(5); ?>
	<tr><td align="center" style="line-height:12px;">
	<span style="<?php disclaimer_Style();?>">
<?php if ($Lang=='fr') { ?>	
	Conformément à la loi n° 1.165 du 23 décembre 1993, modifiée, relative à la protection des informations nominatives,
	vous disposez d’un droit d’accès et de rectification portant sur les données nominatives vous concernant ainsi que d’un droit
	d’opposition à leur utilisation en écrivant par courrier électronique à webmaster@sbm.mc ou par voie postale Monte-Carlo
	Société des Bains de Mer, Direction Marketing, Place du Casino, B.P. 139, 98000 Monte-Carlo. Pour mettre à jour vos informations de profil
	ou vous désabonner, veuillez accéder à la page : <a style="<?php linkStyle_Style();?>" href = "<?=$unsubscribeLink;?>&locale=fr">Gestion des préférences</a>.
<?php } else  { ?>
	In conformity with Law N° 1.165 passed on December 23rd, 1993, since amended, relating to the protection of personal information,
	you may exercise your right to access and rectify your personal data and the right to oppose its use by sending an e-mail to 
	<a href="mailto:webmaster@sbm.mc">webmaster@sbm.mc</a> or sending a letter by post to Monte-Carlo SBM, Direction Marketing, Place du Casino, 98000 Monte-Carlo. 
	To update your profile information or unsubscribe, please go to page : <a style="<?php linkStyle_Style();?>" href="<?=$unsubscribeLink;?>&locale=en">Preference Management</a>.
<?php } // end isFR ?>
	</span>
	</td></tr>
	<?php spaceLine(20);?>
<!-------------END----------------->
<!------------FOOTER--------------->
<!-------------END----------------->
</table>
<img src="http://ad.doubleclick.net/activity;src=3957750;type=retar227;cat=SBM_N0;ord=1?" width="1" height="1" alt=""/>
</center>
</body>
</html>