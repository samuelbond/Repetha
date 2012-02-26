<?php

require 'function.php';
$IDs = getArray();
?>

<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="/teach/css/style.css" />
</head>
<body class="bodyi">
<div id="left"></div>
<div id="tab"></div>
<div id="head"></div>
<div id="home">
<a href="../index.php" style="color:#fff; font-size:15px; text-decoration:none;"><b>Home</b></a>
</div>
<div id="round"></div>
<?php if (isset($_GET['id'], $IDs) || !$_GET): ?>
<div id="round_title"><?php schoolTitle(); ?></div>
<div id="sch_despace">
<div id="round2"></div>
<div id="round_menu1"></div>
<div id="round_menu2"></div>
<div id="round_menu3"></div>
<div id="round_menu4"></div>
<div id="round_menu5"></div>
 <h3 style="margin-top:55px; margin-left:20px; color:#666; font-size:20px; margin-bottom:-15px;" >School Details</h3> 

<?php schoolDetails(); ?>
<?php $new= $_GET['id']; ?>
<?php else: ?>
		
			<!-- Show a not found error -->
			<p>Not found</p>
		
		<?php endif; ?>


<script language="JavaScript" type="text/javascript">
<!--
function getID ( selectedtype )
{
  document.idform.id.value = selectedtype ;
  document.idform.submit() ;
}
-->
</script> 

<script language="JavaScript" type="text/javascript">
<!--
function coID ( selectedtype )
{
  document.coform.id.value = selectedtype ;
  document.coform.submit() ;
}
-->
</script>
<script language="JavaScript" type="text/javascript">
<!--
function upID ( selectedtype )
{
  document.coform.id.value = selectedtype ;
  document.coform.submit() ;
}
-->
</script>
<form name="coform" method="get" action="export/export.php">
<input type="hidden" name="id"  />
<a href="javascript:coID('<?php echo $new; ?>')" style="top:55px; position:absolute; left:730px; text-decoration:none;
color:orange;"><b>Export As XML</b></a>
</form>
<a href="export/export_pdf.php?id=<?php echo $new; ?>" style="top:55px; position:absolute; left:600px; text-decoration:none;
color:orange;"><b>Export As PDF</b></a>
<form name="idform" method="get" action="view_teacher.php">
<input type="hidden" name="id"  />
<div id="round_menu1_title"><a href="javascript:getID('<?php echo $new; ?>')" class="one">Teachers</a></div>

</form>
       <div id="round2_title"><a href="view.php?id=<?php echo $new; ?>" class="one">Details</a></div> 
       <div id="round_menu2_title"><a href="update.php?id=<?php echo $new; ?>" class="one">Update Details</a></div>
       </div>
        </body>
        </html>
