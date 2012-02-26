<?php

//this is the directory the file is in
define('CURRENT_DIR',dirname(__FILE__));
//this is the next directory up
define('PARENT_DIR',dirname(dirname(__FILE__)));


//if you wanted to use this in a require
require_once PARENT_DIR . "/db/config.php";




connect();

$s_name=$_POST['name'];
$s_id= $_POST['om_id'];
$s_type=$_POST['type'];
$s_status=$_POST['status'];
$s_contact=$_POST['contact'];
$s_person=$_POST['c_person'];
$p_email=$_POST['c_email'];
$s_street=$_POST['street'];
$s_city=$_POST['city'];
$s_county=$_POST['county'];
$s_zip=$_POST['zip'];
$s_phone=$_POST['phone'];
$s_email=$_POST['email'];
$s_web=$_POST['web'];


		$pageID = $_GET['id'];
        
$query=mysql_query("UPDATE school SET name='$s_name',om_id='$s_id',type='$s_type',status='$s_status',
sch_contact='$s_contact',street='$s_street',city='$s_city',county='$s_county',zip='$s_zip',phone='$s_phone',
email='$s_email',web='$s_web',contact_person='$s_person',contact_email='$s_email' WHERE id='$pageID'");


if ($query){
     
    echo("Updated Successfully ");
}

else
{
    echo ("Could not Update Details");
}










?>