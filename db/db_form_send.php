<?php
require 'config.php';

connect();

function safe($value)
{
 return mysql_real_escape_string($value);   
}

$name   =   safe($_REQUEST['sch_name']);     
$code   =   safe($_REQUEST['om_id']);   
$type   =   safe($_REQUEST['type']);                
$contact=   safe($_REQUEST['cont_c_name']);                
$status =   safe($_REQUEST['status_c_name']);
$street =   safe($_REQUEST['street']);
$city   =   safe($_REQUEST['city']);
$county =   safe($_REQUEST['county']);
$zip    =   safe($_REQUEST['zip']);
$phone  =   safe($_REQUEST['phone']);
$email  =   safe($_REQUEST['email']);
$web    =   safe($_REQUEST['web']);

if ($name && $code && $type && $contact && $status && $street && $city && $county && $zip && $phone && $email && $web)
{
mysql_query("INSERT INTO school (name, om_id, type, status, sch_contact, street, city, county, zip, phone, email, web) 
values ('$name','$code','$type','$status','$contact','$street','$city','$county','$zip','$phone','$email','$web')");

header('location: formsuccess.html');

}
 else 
 {
    echo("Your Registration Was not Successful Please Try Again");
    
 }



?>