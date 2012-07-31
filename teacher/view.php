<?php
/**
require_once "function2.php";
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
<div id="round_title"><b><?php  teacherTitle(); ?></b></div>
<div id="sch_despace">
<div id="round2"></div>
<div id="round_menu1"></div>
<div id="round_menu2"></div>
<div id="round_menu3"></div>
<div id="round_menu4"></div>
<div id="round_menu5"></div>
 <h3 style="margin-top:55px; margin-left:20px; color:#666; font-size:20px; margin-bottom:-15px;" >Details</h3> 

<?php  teacherDetail(); ?>
<?php  $new= $_GET['id']; ?>
<?php  else: ?>
		
			<!-- Show a not found error -->
			<p>Not found</p>
		
		<?php  endif; ?>
 
 <script language="JavaScript" type="text/javascript">
<!--
function coID ( selectedtype )
{
  document.coform.id.value = selectedtype ;
  document.coform.submit() ;
}
-->
</script>
<form name="coform" method="get" action="study.php">
<input type="hidden" name="id"  />
<div id="round_menu1_title"><a href="" class="one"><a href="javascript:coID('<?php echo $new; ?>')"
style="text-decoration:none; color:#666666; "><b>Studies Data</b></a></div>   
</form>
 
 <div id="round2_title"><a href="" class="one">Details</a></div> 
</div>

*/ 

<?php 

public function createT($name, $email, $fax, $office, $contact, $title, $bio, $education, $pub, $last_pub, $general_info, $photo)
{
	$db = new db;
	$db->connect();
	
	$sql = mysql_query("INSERT INTO teacher (name, email, fax, office, contact, title, bio,
	education, pub,last_pub, general_info,photo) values ('$name', '$email', '$fax', '$office', '$contact', 
	'$title', '$bio', '$education', '$pub', '$last_pub', '$general_info','$photo')");
	
	if ($sql)
	{
	return true;	
	}
	else
	{
	return false;
	}
}

public function createProfile($user)
{
	$db = new db;
	$db->connect();
	
	$sql = mysql_query("SELECT * FROM user WHERE username='$user'");
	
	if($sql)
	{
		$row = mysql_fetch_array($sql);
		$name =
		$email =
		$fax =
		$contact=
		$phone=
		
		
		
	}
	else
	{
		return false;
	}
}

public function isTeacher($user)
{
	$db = new db;
	$db->connect();
	
	$sql = mysql_query("SELECT * FROM user WHERE username='$user'");
	
	if($sql)
	{
		$row = mysql_fetch_array($sql);
		$type = $row['type'];
		
		if ($type == "teacher")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

public function isAdmin($user)
{
	$db = new db;
	$db->connect();
	
	$sql = mysql_query("SELECT * FROM user WHERE username='$user'");
	
	if($sql)
	{
		$row = mysql_fetch_array($sql);
		$type = $row['type'];
		
		if ($type == "admin")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

?>