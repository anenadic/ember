<?php
	include ("connect.inc");
	$result = mysql_query("select * from tblember_user where user_name = '$user'") or die (mysql_error());
	$row = mysql_fetch_array($result);
	$passwd = $row["User_passwd"];
	$firstname = $row["user_firstname"];
	mysql_free_result($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- Fireworks MX Dreamweaver MX target. Created Wed Oct 16 13:14:05 GMT-2200 2002-->
<script language="JavaScript" type="text/JavaScript">
<!-- 

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
  var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
  if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<script language="JavaScript" type="text/JavaScript" src="scripts.js">
</script>
<link href="screen.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg')">
<?PHP
	include "notepad.php";
	?>
<div style="z-index:1; position:absolute; left:0px; top:0px">
<table width="750" border="0" cellpadding="0" cellspacing="0"><!--DWLayoutTable-->
 <tr>
  <td colspan="2">
	<?PHP
	include "banner.php";
	?></td>
 </tr>
 <tr>
  <td width="215" valign="top" nowrap></td>
  <td align="left" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/intro_tab.gif" width="314" height=21 border=0 align=bottom></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%"> 
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#7B0101"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
          <td valign=top> 
           <p><img src="Graphics/login_header.gif" width="457" height="14"></p>
           <?php echo "Hello $firstname, thanks for creating an EMBER account. Your login name is: $user. If you forget your password, you can use the hint you provided."; ?>
           <p>In order for us to assess the course, we need to test your bioinformatics knowledge by means of a simple quiz. This will be repeated at the end of the practical to see if it has been successful.</p>
			<p>The results will only be accessible to you, your course coordinator and the EMBER team. They will be kept confidentially. Any assessment of the course will use general results only; no individual user will be named.</p>
			<p>Please don't refer to the Internet during the quiz, nor ask your friends, as we need to judge the practical objectively.</p>
			<p>You are now ready to enter the <b><a href="initial.php">initial quiz</a></b>.</p></td>
        </tr>
       </table></td>
      <td valign=top width=1 bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="100%" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="1" bgcolor="#7B0101"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
    </table></td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>

</div>

<p>&nbsp;</p></body>
</html>
