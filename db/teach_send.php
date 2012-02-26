<?php

require_once 'config.php';
connect();

$t_id= mt_rand(1173, 9739); 

$t_name=$_REQUEST['name'];
$t_status=$_REQUEST['status'];
$t_other=$_REQUEST['other'];
$t_school=$_REQUEST['sch_name_id'];
$t_address=$_REQUEST['address'];
$t_phone=$_REQUEST['phone'];
$t_email=$_REQUEST['email'];
$t_exam=$_REQUEST['exam'];
$t_grad=$_REQUEST['grad'];
$s_subject=$_REQUEST['subject'];
$s_type=$_REQUEST['type'];
$s_year=$_REQUEST['year'];
$s_exper=$_REQUEST['exper'];

$send=mysql_query("INSERT INTO teacher (t_name,status,other_info,school,address,phone,email,t_id) values ('$t_name',
'$t_status','$t_other','$t_school','$t_address','$t_phone','$t_email','$t_id')") or die (mysql_error());

$new_send=mysql_query("INSERT INTO subject (t_id,mento,name,type,year,exper,post_grad) values ('$t_id',
'$t_exam','$s_subject','$s_type','$s_year','$s_exper','$t_grad')") or die (mysql_error());

if ($send && $new_send )
{
    header('location: formsuccess.html');
    
}

else
{
    echo "Your Registration Failed Please Try Again";
}









?>