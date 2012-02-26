<?php

require_once 'config.php';
connect();

function safe($value)
{
 return mysql_real_escape_string($value);   
}

$name=safe($_REQUEST['name']);
$email=safe($_REQUEST['email']);
$phone=safe($_REQUEST['phone']);
$code=safe($_REQUEST['code']);
$address=safe($_REQUEST['address']);

if ($name && $email && $phone && $code && $address != "")
{
    
    $query=mysql_query("INSERT INTO student (name,email,phone,neptun,address) values ('$name','$email','$phone','$code',
    '$address')");
    
    header("Location: formsuccess.html");
    
    }

else echo("Your Registration was not Successfull");
?>