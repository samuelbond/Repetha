<?php require 'function.php'; 
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
<div id="round_title"><b><?php profileTitle(); ?></b></div>

<div id="sch_despace">
<div id="round2"></div>
<div id="round_menu1"></div>
<div id="round_menu2"></div>
<div id="round_menu3"></div>
<div id="round_menu4"></div>
<div id="round_menu5"></div>
<h3 style="margin-top:55px; margin-left:20px; color:#666; font-size:20px; margin-bottom:15px;" >Details</h3>
<img src="../images/active.gif" height="37px" width="123px" />
<?php  profile(); ?>
<?php  $new= $_GET['id']; ?>
<?php  else: ?>
		
			<!-- Show a not found error -->
			<p>Not found</p>
		
		<?php  endif; ?>

