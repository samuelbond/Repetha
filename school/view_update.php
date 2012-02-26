<?php
//this is the directory the file is in
define('CURRENT_DIR',dirname(__FILE__));
//this is the next directory up
define('PARENT_DIR',dirname(dirname(__FILE__)));


//if you wanted to use this in a require
require_once PARENT_DIR . "/db/config.php";


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