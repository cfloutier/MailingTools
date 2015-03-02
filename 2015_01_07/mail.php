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
Pour être sûr de recevoir les emails de Monte-Carlo Société des Bains de Mer, nous vous conseillons <br/>d'ajouter newsSBM@news.sbm.mc à votre carnet d'adresses</span></td>
<?php } else  { ?>

If you are unable to read this e-mail, please&nbsp;: <a href="<%syslink_message_read url='/public/read_message.jsp'%>" target="_blank">follow this link</a>.</span><br />

		</td><?php } // end isFR ?>
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
			<img src="<?=$ImagesDir;?>/mc-logo.jpg" alt="Monte Carlo" border="0" style="display:block;overflow:hidden; width:100%; height:auto;" title="Monte Carlo"></a>
	</td>
	</tr>
	<?php spaceLine(10); ?>
	<tr><td>

<?php if ($Lang=='fr') { ?>	
<a href="http://fr.hoteldeparismontecarlo.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/#EPR-8110" target="_blank">
<?php } else  { ?>
	<a href=" http://www.hoteldeparismontecarlo.com/news/hotel-de-paris-monte-carlo-furniture-auction/#EPR-8111" target="_blank">
<?php } // end isFR ?>	
			<img src="<?=$ImagesDir;?>/HotelDeParis.jpg" alt="Hotel de Paris" border="0" style="display:block;overflow:hidden; width:100%; height:auto;" title="Hotel de Paris"></a>
	</td>
	</tr>
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
<a style="<?php linkStyle_Style();?>" href="http://fr.hoteldeparismontecarlo.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/#EPR-8110" target="_blank">
Vente aux Enchères</a>
<?php } else  { ?>
<a style="color:#000000;text-decoration: none;" href="http://www.hoteldeparismontecarlo.com/news/hotel-de-paris-monte-carlo-furniture-auction/#EPR-8111" target="_blank">
SALE BY AUCTION</a>
<?php } // end isFR ?>	
	</center></td>
  </tr>
 <?php spaceLine(18); ?>
   <tr>  
 <?php if ($Lang=='fr') { ?>
 <td><center style="<?php bigTitle2_Style();?>" >Invitation</center></td><?php } else  { ?>
 <td><center style="<?php bigTitle2_Style();?>" >Invitation</center></td><?php } // end isFR ?>	 
  </tr>
	<?php spaceLine(20); ?>
	<tr><td>
		<center style="<?php mainText_Style();?>" > 	
<?php if ($Lang=='fr') { ?>
<?php if ($WithLogo=='true') { ?>			 
Dans le cadre de votre programme Cercle Monte-Carlo,</br>
<?php }	?>	
Artcurial et Monte-Carlo Société des Bains de Mer<br/>
ont le plaisir de vous inviter à la vente aux enchères</br>
du mobilier de l’Hôtel de Paris</br>

<?php } else  { ?>

         <p>
		 
		 
<?php if ($WithLogo=='true') { ?>			 
		As a Member of the Cercle Monte-Carlo programme,</br>
<?php }	?>	 
		Artcurial and Monte-Carlo Société des Bains de Mer</br>
        are pleased to invite you to a sale of furniture from the Hôtel de Paris</br>  
            </p><?php } // end isFR ?>

		</center></td></tr>
	<?php spaceLine(10); ?>
    <tr><td>
		<center style="<?php mainText_StyleBold();?>"> 
		
<?php if ($Lang=='fr') { ?>		
		Du dimanche 25 au vendredi 30 janvier 2015</br>
<?php } else  { ?>
		From 25 to 30 January 2015</br>
<?php } // end isFR ?>
		</center></td>
	</tr> 
	<?php spaceLine(30); ?>
	<tr><td>
<?php if ($Lang=='fr') { ?>	
<a href="http://fr.hoteldeparismontecarlo.com/actualites/vente-aux-encheres-dune-partie-du-mobilier-de-lhotel-de-paris-monte-carlo-2/#EPR-8110" target="_blank">
<?php } else  { ?>
	<a href=" http://www.hoteldeparismontecarlo.com/news/hotel-de-paris-monte-carlo-furniture-auction/#EPR-8111 " target="_blank">
<?php } // end isFR ?>		
	<img src="<?=$ImagesDir;?>/bigPicture.jpg" alt="Hotel de Paris - Monte Carlo" border="0" style="display:block;overflow:hidden; width:100%; height:auto;" title="Hotel de Paris - Monte Carlo"></a>
	</td>
	</tr>
	<?php spaceLine(20); ?>
    <tr><td>
		<center style="<?php mainText2_Style();?>" > 
<?php if ($Lang=='fr') { ?>	
          <p>Exposition publique des lots du 21 au 24 janvier 2015,<br />
          de 10h à 19h dont nocturne le 23 janvier jusqu’à 21h</p>
          <p><br />
            <a href="http://www.artcurial.com/fr/asp/searchresults.asp?pg=1&amp;ps=18&amp;st=D&amp;sale_no=2725+++" target="_blank"><strong>Consultez le catalogue en ligne des lots et objets de légende </strong></a></p>
<?php } else  { ?>
         <p>Public viewing from 21 to 24 January 2015,<br/>
          10 a.m. to 7 p.m., evening view 23 January until 9 p.m.</p>
          <p><strong><a href="http://www.artcurial.com/en/asp/searchresults.asp?pg=1&amp;ps=18&amp;st=D&amp;sale_no=2725+++" target="_blank">View the sale lots and signature objects from the Hôtel de Paris in the online catalogue.</a></strong><br />
            </p>
<?php } // end isFR ?></center>
	</td></tr> 
	<?php spaceLine(15); ?>
	<tr><td>
		<center>
		<a href="http://www.artcurial.com" target="_blank">
			<img src="<?=$ImagesDir;?>/ARTCURIAL.jpg" alt="ArtCurial" border="0" style="display:block;overflow:hidden; width:135px; height:70px;" title="ArtCurial"></a>
		</center>
	</td></tr>

	<tr><td>
		<center style="<?php mainText3_Style();?>" > 
			
<?php if ($Lang=='fr') { ?>		
		Inscription à la vente : T. +33 1 42 99 20 51 | <a style="<?php linkStyle_Style();?>" href="mailto:E.bids@artcurial.com">E.bids@artcurial.com</a> | <a href="http://www.artcurial.com" target="_blank" style="<?php linkStyle_Style();?>" >www.artcurial.com</a>
<?php } else  { ?>
		Registration : T. +33 1 42 99 20 51 | <a href="mailto:E.bids@artcurial.com" target="_blank" style="color:#000000;text-decoration: none;">E.bids@artcurial.com</a> | <a href="http://www.artcurial.com" target="_blank" style="color:#000000;text-decoration: none;">www.artcurial.com</a>
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
			<a href="http://fr.montecarlosbm.com/?xtor=ES-8111"  target="_blank">
<?php } else  { ?>
			<a href="http://www.montecarlosbm.com/">
<?php } // end isFR ?>			
			<img src="<?=$ImagesDir;?>/link_Montecarlo.jpg" alt="" border="0" style="display:block;overflow:hidden; width:190px; height:20px;" title="">		</a>
	
	
<a href="https://www.facebook.com/MonteCarloSBM" target="_blank"><img src="<?=$ImagesDir;?>/fb.jpg" alt="facebook" border="0" title="facebook"></a><a href="https://twitter.com/MonteCarloSBM" target="_blank"><img src="<?=$ImagesDir;?>/twitter.jpg" alt="twitter" border="0" title="twitter"></a><a href="http://instagram.com/montecarlosbm" target="_blank"><img src="<?=$ImagesDir;?>/instagram.jpg" alt="instagram" border="0" title="instagram"></a><a href="https://fr.linkedin.com/company/monte-carlo-sbm---soci-t-des-bains-de-mer" target="_blank"><img src="<?=$ImagesDir;?>/LinkedIn.jpg" alt="LinkedIn" border="0" title="LinkedIn"></a><a href="https://www.youtube.com/user/SBMmonaco" target="_blank"><img src="<?=$ImagesDir;?>/youtube.jpg" alt="YouTube" border="0" title="YouTube"></a><a href="https://plus.google.com/+Montecarlosbm/posts" target="_blank"><img src="<?=$ImagesDir;?>/gplus.jpg" alt="Google Plus" border="0" title="Google Plus"></a>
	</center>
	</td>
	
<?php if ($WithLogo=='true') { ?>	
<td>
<?php if ($Lang=='fr') { ?>		
		<a href="http://fr.hoteldeparismontecarlo.com/programme-de-fidelite-cercle-monte-carlo/"><img src="<?=$ImagesDir;?>/LeCercle.jpg" alt="" border="0" style="display:block;overflow:hidden; width:135px; height:70px;" title="Le Cercle">
<?php } else  { ?>
		<a href="http://www.hoteldeparismontecarlo.com/monte-carlo-cercle-english-2/"><img src="<?=$ImagesDir;?>/LeCercle.jpg" alt="" border="0" style="display:block;overflow:hidden; width:135px; height:70px;" title="Le Cercle"></a>
<?php } // end isFR ?>			
		</td>
	
<?php } else {?>
	<?php spaceCell(135); ?>
<?php } ?>
</tr>
</table>


	</td></tr><?php if ($Lang=='fr') { ?>	
<tr><td height="5" width="600" bgColor="#ffffff"><center style="text-align:center; 
		font-family:Georgia, Garamond, serif; 
		font-size:12px; 
		font-weight:normal; 
		color:#000000;
		line-height: 120%;" >#MyMonteCarlo</td></tr>	<tr><td align="center" style="line-height:12px;">
	<span style="font-family:Arial, Helvetica, sans-serif; 
		font-size:10px; 
		font-weight:normal; 
		color:#a6a6a6;">
	
	<br />Conformément à la loi n° 1.165 du 23 décembre 1993, modifiée, relative à la protection des informations nominatives,
	vous disposez d’un droit d’accès et de rectification portant sur les données nominatives vous concernant ainsi que d’un droit
	d’opposition à leur utilisation en écrivant par courrier électronique à<a href="mailto:webmaster@sbm.mc" target="_blank"> webmaster@sbm.mc</a> ou par voie postale Monte-Carlo
	Société des Bains de Mer, Direction Marketing, Place du Casino, B.P. 139, 98000 Monte-Carlo. Pour mettre à jour vos informations de profil
	ou vous désabonner, veuillez accéder à la page : <a href = "<%syslink_profile_edit url='/public/preference-center.jsp'%>&locale=fr" target="_blank" style="color:#000000;text-decoration: none;">Gestion des préférences</a>.	</span>
	</td>
	</tr><?php } else  { ?>
	
	<tr><td height="5" width="600" bgColor="#ffffff"><center style="text-align:center; 
		font-family:Georgia, Garamond, serif; 
		font-size:12px; 
		font-weight:normal; 
		color:#000000;
		line-height: 120%;" >#MyMonteCarlo</td></tr>	<tr><td align="center" style="line-height:12px;">
	<span style="font-family:Arial, Helvetica, sans-serif; 
		font-size:10px; 
		font-weight:normal; 
		color:#a6a6a6;">
	<br />In conformity with Law N° 1.165 passed on December 23rd, 1993, since amended, relating to the protection of personal information,
	you may exercise your right to access and rectify your personal data and the right to oppose its use by sending an e-mail to 
	<a href="mailto:webmaster@sbm.mc" target="_blank">webmaster@sbm.mc</a> or sending a letter by post to Monte-Carlo SBM, Direction Marketing, Place du Casino, 98000 Monte-Carlo. 
	To update your profile information or unsubscribe, please go to page : <a href="<%syslink_profile_edit url='/public/preference-center.jsp'%>&locale=en" target="_blank" style="color:#000000;text-decoration: none;">Preference Management</a>.	</span>
	</td>
	</tr><?php } // end isFR ?>	
	<?php spaceLine(20);?>
<!-------------END----------------->
<!------------FOOTER--------------->
<!-------------END----------------->
</table>
<img src="http://ad.doubleclick.net/activity;src=3957750;type=retar227;cat=SBM_N0;ord=1?" width="1" height="1" alt=""/>
</center>
</body>
</html>