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
<!-- STYLE DIVS & MENUS -->
<div id="left"></div>

<div id="tab"></div>

<div id="head"></div>

<div id="home">
<a href="../index.php" style="color:#fff; font-size:15px; text-decoration:none;">
<b>Home</b>
</a></div>

<div id="round"></div>

<div id="sch_despace">

<div id="round2"></div>

<div id="round_menu1"></div>

<div id="round_menu2"></div>

<div id="round_menu3"></div>

<div id="round_menu4"></div>

<div id="round_menu5"></div>

<!-- END OF STYLE DIVS & MENUS -->
<!-- DISPLAY SCRIPT -->

<?php if (isset($_GET['id'], $IDs) || !$_GET): ?>
<h3 style="margin-top:55px; margin-left:20px; color:#666; font-size:20px; margin-bottom:0px;" >Teachers</h3> 
<?php displayTeacher(); ?>
<?php $new= $_GET['id']; ?>
<?php else: ?>
		
			<!-- Show a not found error -->
			<p>Not found</p>
		
		<?php endif; ?>


<!-- END OF DISPLAY SCRIPT -->

<!-- DATA SENDING -->

<script language="JavaScript" type="text/javascript">
<!--
function getID ( selectedtype )
{
  document.idform.id.value = selectedtype ;
  document.idform.submit() ;
}
-->
</script> 

<!-- MENU LINKS -->
<div id="round_menu1_title"><a href="view_teacher.php?id=<?php echo $new;?>" class="one">Teachers</a></div>
<form name="idform" method="get" action="view.php">
<input type="hidden" name="id"  />
<div id="round2_title"><a href="javascript:getID('<?php echo $new; ?>')" class="one"><b>Details</b></a></div>
</form>
<div id="round_menu2_title"><a href="update.php?id=<?php echo $new; ?>" class="one">Update Details</a></div>
</div>

<!-- END OF MENU LINK -->
<div id="round_title"><?php schoolTitle(); ?></div>