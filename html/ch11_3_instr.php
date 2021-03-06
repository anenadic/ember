<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>EMBER: Chapter 11 - Investigating the inositol phosphatase family: Instructions Step 3</title>
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
<body bgcolor="#9dafd1" background="Graphics/background_left.jpg" onLoad="MM_preloadImages('Graphics/banner_top_r2_c2_f2.jpg','Graphics/previous_f2.gif')">
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
  <td width="215" height="530" valign="top" nowrap style=" background-image:  url(Graphics/backgrounds/ch11.jpg); background-repeat: no-repeat"></td>
  <td align="left" valign="top">

	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="top"> 
    <table border=0 cellspacing=0 cellpadding=0 width="100%">
     <tr> 
      <td valign=top height=21> 
       <table border=0 cellspacing=0 cellpadding=0 width="100%" height=21> <tr> 
      <td valign=top height=21><img src="Graphics/tab_instr_air.gif" width="314" height=21 border=0 align=bottom usemap="#Map"></td>
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
<p>The structure of both proteins has been determined by crystallography. Structural 
 analysis shows that the enzymes share a common core of 155 residues containing 
 the family signatures encoded by PROSITE. These studies suggest that some of 
 the core residues are involved in binding a metal ion or the phosphate group 
 of the substrate, indicating that they are evolutionairly conserved because 
 they are important for the structure or function of the molecule. </p>
<p>Here we will compare the 3D structures of the two sequences, retrieving them 
 using the NCBI VAST service that identifies structural neighbours. </p>
<p><em>NOTE: You will need to have the
  <?php $Url_id="115"; $Link_naam="Cn3D"; include ('get_link.php'); ?> 3-D structure viewer installed for this exercise. </em><i>It does not read PDB
format files, but rather its own format (<a href="ch5_aims.php">Chapter 5</a>). </i>
<p>i) Go to the. Enter 1IMD in the search box and click on <em>Find a structure. </em>This
  will invoke the summary information of one of the X-ray structures of MYOP.
  Click on <i>Structural neighbours </i>(on the left navigation bar) and then
  on <i>Vector Alignment Search Tool.</i> Click on the illustration of Chain
  A (purple horizontal bar) to retrieve the <i>Structure neighbours</i> of
  chain <i>A</i> and select the neighbour with PDB ID 1INP. Leave all other options in the 
  default setting and click the button <em>View 3D Structure</em>. 
<p><em>NOTE: If you get the 
 error message &quot;VAST structure neighbour calculations for this entry are 
 in progress&quot;, which unfortunately happens sometimes during database update, 
 you will need to download and view the two entries separately. </em></p>
<p>ii) In the main window, 
 the superposed structures of the proteins are displayed. Those parts that structurally 
 align are coloured red. In the sequence window is the sequence alignment based 
 on the structural alignment. Select the residues in the sequences that are described 
 by the first inositol monophosphatase family signature.Study 
 the locations of the regions. 
<p><i>NOTE: the pattern can 
 be found around position 160; by holding down the Ctrl key you can make multiple 
 selections. You may also change the drawing style of the backbone in Drawing 
 Settings under View</i>. 
</p>
<table width='100%' border=0 cellspacing=0 cellpadding=6>
	<tr><td> 
		<p align='left'><a href="JavaScript:goPreviousStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('previous','','Graphics/previous_f2.gif',1)"><img name="previous" src="Graphics/previous.gif" width="67" height="49" border="0" alt=""></a></p></td><td>
		<p align='center'>&nbsp;</p></td><td>
		<p align='right'><a href="JavaScript:goNextStep()" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('next','','Graphics/next_f2.gif',1)"><img name='next' src='Graphics/next.gif' width=49 height=49 border=0 alt=''></a></p></td></tr>
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
  <area shape="rect" coords="6,4,39,18" href="ch11_aims.php" alt="Aims" title="Aims">
  <area shape="rect" coords="56,4,122,18" href="ch11_1_instr.php" alt="Instructions" title="Instructions">
  <area shape="rect" coords="137,4,199,17" href="ch11_refs.php" alt="References" title="References">
 </map> 

</div><script>awmSelectedItem=18</script>
<?PHP
	include "toc.php";
	?><p>&nbsp;</p></body>
</html>
