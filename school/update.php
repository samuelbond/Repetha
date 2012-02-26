<?php

require 'function.php';

connect();



		$pageID =$_GET['id'];
    $sql=mysql_query("SELECT id,name,om_id,type,status,sch_contact,street,city,county,zip,phone,email,web,contact_person,
    contact_email FROM school WHERE id='$pageID'");
    $row=mysql_fetch_array($sql);
    $name=$row['name'];
    $id=$row['om_id'];
    $type=$row['type'];
    $status=$row['status'];
    $contact=$row['sch_contact'];
    $street=$row['street'];
    $city=$row['city'];
    $county=$row['county'];
    $zip=$row['zip'];
    $phone=$row['phone'];
    $email=$row['email'];
    $web=$row['web'];
    $person= $row['contact_person'];
    $p_email = $row['contact_email'];

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
<?php $new= $_GET['id']; ?>
<!-- END OF STYLE DIVS & MENUS -->
 <h3 style="margin-top:55px; margin-left:20px; color:#666; font-size:20px; margin-bottom:-15px;" >Update Details</h3><br />
<p></p>

<form name='update' method='post' action='send_update.php?id=<?php echo $new ?>'>
    <div id='form' style='background:#fffaff;'>
    <label>
    <span style='margin-left:10px;'>School Name: </span>
    <input name='name' type='text' value='<?php echo $name ?>' style='width:600px; height:30px; 
    margin-left:20px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>OM ID: </span>
    <input name='om_id' type='text' value='<?php echo $id ?>' style='width:600px; height:30px;
    margin-left:58px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Type: </span>
    <input name='type' type='text' value='<?php echo $type ?>' style='width:600px; height:30px;
    margin-left:73px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Status: </span>
    <input name='status' type='text' value='<?php echo $status ?>' style='width:600px; height:30px;
    margin-left:66px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Contact: </span>
    <input name='contact' type='text' value='<?php echo $contact ?>' style='width:600px; height:30px;
    margin-left:55px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Contact Person: </span>
    <input name='c_person' type='text' value='<?php echo $person ?>' style='width:600px; height:30px;
    margin-left:10px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Contact Email: </span>
    <input name='c_email' type='text' value='<?php echo $p_email ?>' style='width:600px; height:30px;
    margin-left:15px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Street: </span>
    <input name='street' type='text' value='<?php echo $street ?>' style='width:600px; height:30px;
    margin-left:66px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>City: </span>
    <input name='city' type='text' value='<?php echo $city ?>' style='width:600px; height:30px;
    margin-left:75px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>County: </span>
    <input name='county' type='text' value='<?php echo $county ?>' style='width:600px; height:30px;
    margin-left:54px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>zip: </span>
    <input name='zip' type='text' value='<?php echo $zip ?>' style='width:600px; height:30px;
    margin-left:80px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Phone: </span>
    <input name='phone' type='text' value='<?php echo $phone ?>' style='width:600px; height:30px;
    margin-left:57px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Email: </span>
    <input name='email' type='text' value='<?php echo $email ?>' style='width:600px; height:30px;
    margin-left:60px;' /><br />
    </label><br />
    <label>
    <span style='margin-left:10px; '>Website: </span>
    <input name='web' type='text' value='<?php echo $web ?>' style='width:600px; height:30px;
    margin-left:43px;' /><br />
    </label><br />
    <input type='submit' value='Update' style='margin-left:300px;' />
    </form>
    </div>
<script language="JavaScript" type="text/javascript">
<!--
function getID ( selectedtype )
{
  document.idform.id.value = selectedtype ;
  document.idform.submit() ;
}
-->
</script> 



<form name="idform" method="get" action="view_teacher.php">
<input type="hidden" name="id"  />
<div id="round_menu1_title"><a href="javascript:getID('<?php echo $new; ?>')" class="one">Teachers</a></div>
</form>

       <div id="round2_title"><a href="view.php?id=<?php echo $new; ?>" class="one">Details</a></div> 
       <div id="round_menu2_title"><a href="update.php?id=<?php echo $new;?>" class="one">Update Details</a></div>

