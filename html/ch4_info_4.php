<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 4: Sequence aligmnent: Information</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_page_f2.gif','Graphics/next_page_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch4.jpg); background-repeat: no-repeat"></td>
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
       <table border=0 cellspacing=0 cellpadding=0 width="100%">
        <tr> 
          <td valign=top>
					
					<table width="100%" border=0 cellpadding=10 cellspacing=0>
        <tr> 
          <td valign=top> 
           <?PHP
include "info_header.php";
?>


<blockquote>
 4.1&nbsp;&nbsp;<a href="ch4_info.php">Multiple sequence alignment</a><br>
 4.2&nbsp;&nbsp;<a href="ch4_info_2-1.php">Alignment databases</a><br>
 4.3&nbsp;&nbsp;<a href="ch4_info_3.php">Manual sequence alignment tools</a><br>
 4.4&nbsp;&nbsp;<u>Automated sequence alignment tools</u><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.1&nbsp;&nbsp;<a href="ch4_info_4-1.php">CLUSTALW</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.2&nbsp;&nbsp;<a href="ch4_info_4-2.php">T-COFFEE</a><br>
 &nbsp;&nbsp;&nbsp;&nbsp;4.4.3&nbsp;&nbsp;<a href="ch4_info_4-3.php">DIALIGN</a></blockquote>




<p class="sectionheader">
  <a name="autmaton"></a>4.4 Automated Sequence
  Alignment Tools</p>
<p>Manual 
 alignment is often considered inferior to automatic methods because it introduces 
 human bias. However, automatic methods also have limitations and, as discussed 
 in <a href="ch2_aims.php">Chapter 2</a>, heuristic algorithms... have been developed with different strengths 
 and weaknesses. For example : </p>
<ul>
 <li>computational expense rises exponentially with number of sequences </li>
 <li>dynamic algorithms are slow but accurate - in reality going beyond more 
  than a few sequences is not feasible in a reasonable amount of time with normal 
  hardware</li>
 <li>the assumptions made 
  by heuristic algorithms give them problems in dealing with large gaps / deletions</li>
</ul>
<p>Heuristic algorithms have 
 become common place in multiple sequence alignment tools because of the limitations 
 of dynamic ones, despite their greater weakness. </p>
<p>The problem is, computers 
 don't do biology - they cannot make alignment decisions based on scientific 
 judgement. The human brain is far better at pattern matching than are our best 
 algorithms. Human intervention is therefore often necessary to correct the alignment 
 errors introduced by heuristic algorithms.</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
 <tr>
  <td>
   <p align='left'><a href="ch4_info_3-2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_page_f2.gif',1)"><img name="previous" src="Graphics/previous_page.gif" width="85" height="49" border="0" alt=""></a></p></td>
  <td>
   <p align='center'>&nbsp;</p></td>
  <td>
   <p align='right'><a href="ch4_info_4-1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_page_f2.gif',1)"><img name='next' src='Graphics/next_page.gif' width=68 height=49 border=0 alt=''></a></p></td>
 </tr>
</table></td>
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
  <area shape="rect" coords="6,4,39,18" href="ch4_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch4_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,166,18" href="ch4_info.php" alt="Info" title="Info">
  <area shape="rect" coords="185,4,218,17" href="ch4_quiz.php" alt="Quiz" title="Quiz">
  <area shape="rect" coords="234,4,296,17" href="ch4_refs.php" alt="References" title="References">
 </map>
 
</div>
<script>awmSelectedItem=7</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
