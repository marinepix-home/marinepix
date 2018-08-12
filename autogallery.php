<?php require_once('Connections/mydb.php'); ?>
<?php
mysql_select_db($database_mydb, $mydb);
$query_Recordset1 = "SELECT * FROM links ORDER BY id";
$Recordset1 = mysql_query($query_Recordset1, $mydb) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width">
<TITLE>MarinePix               Underwater Photography</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK href="http://www.marinepix.co.uk/res/css/slideshow.css" rel="stylesheet" type="text/css">
<LINK href="http://www.marinepix.co.uk/res/css/prints.css" rel="stylesheet" type="text/css">
<LINK href="http://www.marinepix.co.uk/res/css/responsivemenus.css" rel="stylesheet" type="text/css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46728061-1', 'marinepix.co.uk');
  ga('send', 'pageview');
  </script>
</HEAD>
<BODY>   
<?php include ("title.php"); ?>
<?php include ("menus.php"); ?>
<CENTER>
<TABLE cellspacing=10 cellpadding=0 border=0 bordercolordark="#333333" bordercolorlight="#999999" bordercolor="#333333">
<!-- 
<TABLE width="100%" cellpadding="3">
 -->
<?php
if ($totalRows_Recordset1 > 0)
{
while($row = mysql_fetch_assoc($Recordset1))
{
  echo '<tr>';
  echo '<td>';
  echo '<A name=1 href="bigpic.php?id='. $row['id'] .'"><img width="'.$row['width']/5 .'" height="'.$row['height']/5 .'" src="'.$row['thumbfilename'].'" border=1 alt="'.$row['description'].'"></td>';

  $icount=0;
  while(($row = mysql_fetch_assoc($Recordset1)) && $icount<3)
  {
    echo '<td><A name=1 href="bigpic.php?id='. $row['id'] .'"><img width="'.$row['width']/5 .'" height="'.$row['height']/5 .'" src="'.$row['thumbfilename'].'" border=1 alt="'.$row['description'].'"></td>';
    $icount++;
  }
echo '</tr>';
}
}
?>
    </TABLE>
  </DIV>
<TR><td>
    <A href="javascript:PicLensLite.start();">
      <IMG src="gallerypages/images/piclens_badge.gif" alt="PicLens" align="absmiddle">
    </A>
</td>
</TR>
</TABLE>
</CENTER>
</BODY>
</HTML>
