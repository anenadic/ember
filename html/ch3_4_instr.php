<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 3 - Protein Family Analysis: Instructions Step 4</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/next_chapter_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch3.jpg); background-repeat: no-repeat">
  <td align="left" valign="top">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_aiiqr.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
      <td valign=top height=21 width="100%"> 
          <table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
           <tr> 
            <td valign=top height=20 width="100%"> 
             <p>&nbsp;</p></td>
           </tr>
           <tr> 
            <td valign=top height=1 bgcolor="#336633"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <table border=0 cellspacing=0 cellpadding=0>
        <tr> 
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
         <td valign=top background="Graphics/background_content.gif">
          <table border=0 cellspacing=0 cellpadding=10 width="100%">
           <tr> 
            <td valign=top> 
<?PHP
include "instr_header.php";
?>


<p>To try to build a consensus
  view of your query sequence, of the motifs and/or domains it contains, and
  of the protein family or families to which it is related, it is helpful to
  draw a diagram illustrating the locations of each of your database matches.
  To help with this, we will examine InterPro, a resource that integrates information
  from several databases. </p>
<p >i) If your sequence has a database identifier, you may perform a rapid 
<?php $Url_id="42"; $Link_naam="simple search"; include ('get_link.php'); ?> by supplying either a UniProtKB ID or accession number, or simply a keyword that describes
   your query sequence. Explore the links and examine the graphical representations and annotations. </p>
<p >ii) If your sequence does not have a database identifier, you may perform a <?php $Url_id="43"; $Link_naam="sequence search"; include ('get_link.php'); ?>.
This is much slower, but should eventually return the same kind of graphical representation of matches it finds in the different
 databases. </p>
<p><i>Reflections...</i></p>
<p><i>InterPro: </i></p>
<ul>
 <li><i>What is the value
    of InterPro, if you can access all of its partner databases directly? (<a href="ch3_info_5.php">HINT</a>)</i></li>
 <li><i>How &quot;good&quot; do you think the search results are? What measure of confidence do you have that the results are reliable?</i></li>
</ul>
<p><i>Overall:</i></p>
<ul>
 <li><i>How do the results
    of the different protein family databases compare? </i></li>
 <li><i>Is there a consensus
    between them? What are the differences, if any?</i></li>
 <li><i> Is there correspondence
    with the BLAST result?</i></li>
</ul>




<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<div align="center"><form><input type="button" class="formbutton" name="goquiz" value="Go to quiz" onClick="goQuiz(3)" onMouseOver="this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.background='#D5E1ED'; this.style.color='#000060';"></form></div></td><td>
		<p align='right'><a href="JavaScript:goNextChapter()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next_chapter','','Graphics/next_chapter_f2.gif',1)"><img name="next_chapter" src="Graphics/next_chapter.gif" width="68" height="49" border="0" alt=""></a></p></td></tr>
</table></td>
           </tr>
          </table></td>
         <td valign=top width=1 bgcolor="#336633"> 
          <p><img src="Graphics/spacer.gif" width=1 height=1 align=bottom></p></td>
        </tr>
       </table>
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=1>
        <tr> 
         <td valign=top height=1 bgcolor="#336633"><img src="Graphics/spacer.gif" width=1 height=1 border=0 align=bottom></td>
        </tr>
       </table></td>
     </tr>
    </table></td>
   <td width="15" valign="top"><img src="Graphics/spacer.gif" width=15 height=1 align=bottom></td>
  </tr>
 </table>
 <p>&nbsp;</p></td>
 </tr>
</table>

 <map name="Map">
  <area shape="rect" coords="6,4,39,18" href="ch3_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch3_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch3_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch3_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch3_refs.php" alt="References" title="References">
 </map>
</div><script>awmSelectedItem=6</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
