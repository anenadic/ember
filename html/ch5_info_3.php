<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 5: Sequence property profiles: Information</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch5.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">
	
	
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td valign="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_info_aiiqr.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
        <tr> 
         <td valign=top height=20 width="100%">
          <p>&nbsp;</p></td>
        </tr>
        <tr> 
         <td valign=top height=1 bgcolor="#993333"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table>
    <table border=0 cellspacing=0 cellpadding=0>
     <tr> 
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top background="Graphics/background_content.gif"> 
       <table border=0 cellspacing=0 cellpadding=10 width="100%">
        <tr> 
				 <td valign=top>
<?PHP
include "info_header.php";
?>



<blockquote>
 5.1&nbsp;&nbsp;<a href="ch5_info.php">Physicochemical parameters and profiles</a><br>
 5.2&nbsp;&nbsp;<a href="ch5_info_2.php">Transmembrane helix prediction</a><br>
 5.3&nbsp;&nbsp;<u>Secondary structure profiles</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.1&nbsp;&nbsp;<a href="ch5_info_3-1.php">Statistical and machine learning methods</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.2&nbsp;&nbsp;<a href="ch5_info_3-2.php">Jpred</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.3&nbsp;&nbsp;<a href="ch5_info_3-3.php">NNPREDICT</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;5.3.4&nbsp;&nbsp;<a href="ch5_info_3-4.php">NPS@PBIL consensus secondary structure prediction</a><br>
 5.4&nbsp;&nbsp;<a href="ch5_info_4.php">Tertiary structure prediction</a>

</blockquote>


<p class="sectionheader">
<a name="three"></a>5.3 Secondary structure 
 profiles</p>
<p>Structure prediction from sequence is not a solved problem. Given the ever-growing 
 databases now available, the prediction of structure from sequence might not 
 seem to be an unrealistic expectation. However, in spite of decades of research, 
 the rules of protein folding are not fully understood and reliable structure 
 prediction is still not possible.</p>
<p>In deriving 
 secondary structure prediction profiles, various assumptions and simplifications 
 are made: </p>
<p>1. that 
 all 
 the information for folding is contained in the sequence. This is still something 
 of an open question, as many proteins require chaperones to achieve their correct 
 fold, and disulphide bonds and/or PTMs that affect folding are also dependent 
 on cellular conditions. </p>
<p>2. that 
 examining 
 short sequence windows (<em>e.g</em>., 10-20 residues) is sufficient to provide 
 robust predictions. This is naive because elements of sequence not adjacent 
 in 2D are often close in 3D, and are hence likely to influence the final fold. 
</p>
<p>There 
 are 3 main approaches to secondary structure prediction: </p>
<ul>
 <li> empirical 
  statistical methods, which use parameters from known structures</li>
 <li> machine learning methods, which are trained using known secondary structures</li>
 <li> threading 
  or fold-recognition approaches, which seek compatible folds for a sequence 
  within fold template databases (see <a href="ch8_aims.php">Chapter 8</a>)</li>

</ul> <br><table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch5_info_2-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'><a href="ch5_info_3-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
  </tr>
 </table></td>
				 
				 
        </tr>
       </table></td>
      <td valign=top width=1 bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
     <tr> 
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="100%" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
      <td valign=top width="1" bgcolor="#993333"> 
       <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
     </tr>
    </table></td>
   <td width=15 valign="top">&nbsp;</td>
  </tr>
 </table></td>
 </tr>
</table>


 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch5_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch5_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch5_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch5_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch5_refs.php" alt="References" title="References">
 </map>
</div>
<script>awmSelectedItem=8</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
