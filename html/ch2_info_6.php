<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 2 - Sequence similarity searches: Information</title>
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch2.jpg); background-repeat: no-repeat"></td>
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
	?><blockquote>
 2.1&nbsp;&nbsp;<a href="ch2_info.php">The amino acid codes and their properties</a><br>
 2.2&nbsp;&nbsp;<a href="ch2_info_2.php">Similarity scoring matrices</a><br>
 2.3&nbsp;&nbsp;<a href="ch2_info_3.php">Heuristic algorithms</a><br>
 2.4&nbsp;&nbsp;<a href="ch2_info_4.php">Dynamic algorithms</a><br>
 2.5&nbsp;&nbsp;<a href="ch2_info_5.php">Similarity searching with BLAST</a><br>
 2.6&nbsp;&nbsp;<u>PSI-BLAST</u>
</blockquote>
<p class="sectionheader">
 <a name="_Ref1375010" class="sectionheader"></a>2.6 PSI-BLAST</p>
<p> A hybrid approach, combining elements of both pairwise- and multiple-
 sequence alignment methods is Position-Specific Iterated (PSI)-BLAST. Although 
 motif-based methods are recognised as being highly sensitive and selective, 
 their main drawback is that the derivation of diagnostic family signatures is 
 time-consuming. The innovation of PSI-BLAST is that, following an initial database 
 search, it allows automatic creation of position-specific profiles from groups 
 of results that match a query above a defined threshold, as illustrated in Fig 
 2.5. Running the program several times can further refine the profile and increase 
 search sensitivity. </p>
<table width="80%" align="center" cellspacing="8">
 <tr valign="top">
  <td><a href="javascript:openxlink('ch2/fig2-5.html','left')"><img src="ch2/thumbs/fig2-5.gif" width="150" height="126" border="0" class="imgborder"></a></td>
  <td><p class="photocaption">Fig 2.5. Outline of the Position Specific
  Iterated-BLAST algorithm.</p>
    <p class="small">[click thumbnail for full size image]</p></td>
 </tr>
</table>
<p>As with other iterative methods, however, PSI-BLAST is not infallible and 
  can have disadvantages. For example, unless low-complexity segments are masked, 
  automated iterative searches tend to degenerate to compositionally-biased sequences 
  (such as collagen, <em>etc.</em>), leading to profile dilution. Once a false sequence 
  has crept into a profile, the search will thereafter be biased to accept many 
  more unrelated sequences. It is therefore vital to validate relationships inferred 
  from unsupervised iterative profile searches to eliminate erroneous matches.</p><div align="center">
 <table width='100%' border=0 cellspacing=0 cellpadding=6>
  <tr>
   <td>
    <p align='left'><a href="ch2_info_5.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
   <td>
    <p align='center'>&nbsp;</p></td>
   <td>
    <p align='right'>&nbsp;</p></td>
  </tr>
 </table>
</div></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch2_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch2_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch2_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch2_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch2_refs.php" alt="References" title="References">
 </map> 
</div>
<script>awmSelectedItem=5</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
