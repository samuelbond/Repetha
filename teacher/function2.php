<?php


        
define('CURRENT_DIR',dirname(__FILE__));
//this is the next directory up
define('PARENT_DIR',dirname(dirname(__FILE__)));


//if you wanted to use this in a require
require_once PARENT_DIR . "/db/config.php";

connect();


 function safeRes($value){
    
    return mysql_real_escape_string($value);
    
 }
 
    function teacherDetail()
    {


	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeRes($pageID);
        
$query=mysql_query("SELECT id,t_name,status,other_info,address,phone,email FROM teacher WHERE id='$pageID' ");        
$row=mysql_fetch_array($query);

        $t_name=$row['t_name'];
        $t_status=$row['status'];
        $other=$row['other_info'];
        $address=$row['address']; 
        $phone=$row['phone'];
        $email=$row['email'];       

       echo ("<table class='reference' style='width:95%; margin:15px; '><tr>
        <td style='background-color:#f6f6f6;' >Name: </td>
        <td >$t_name</td>
        </tr>
       <tr>
       <td style='background-color:#f6f6f6;' >Status: </td>
       <td >$t_status</td>
        </tr>
        <tr>
       <td style='background-color:#f6f6f6;' >Other Information: </td>
       <td >$other</td>
        </tr>
        <tr>
       <td style='background-color:#f6f6f6;' >Address: </td>
       <td >$address</td>
        </tr>
       <tr>
       <td style='background-color:#f6f6f6;' >Telephone: </td>
       <td >$phone</td>
        </tr>
       <tr>
       <td style='background-color:#f6f6f6;' >Email: </td>
       <td >$email</td>
        </tr>
       </table>
       
       
       
       
       ");
        
        
        
        
    }
    else {
        
        header("location: 404.php");
    }
    }


function teacherTitle() {

	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeRes($pageID);	
		$result = mysql_query("SELECT t_name FROM teacher WHERE id='$pageID'");
		$row = mysql_fetch_array($result);
	
		echo $row['t_name'];
	} 
	}

   
   
   function studyDetail()
   {
    	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeRes($pageID);
        
        $sql=mysql_query("SELECT id,t_name,t_id FROM teacher WHERE id='$pageID'");
        $row=mysql_fetch_array($sql);
        
        $Tid=$row['t_id'];
        
        
        $query = mysql_query("SELECT name,type,year,exper FROM subject WHERE t_id='$Tid'");
        $result=mysql_query("SELECT mento,post_grad FROM subject WHERE t_id='$Tid' ");
        $row=mysql_fetch_array($result);
                    $exam=$row['mento'];
            $postgrad=$row['post_grad'];
            echo("<table class='reference' style='width:95%; margin:15px; '>
            <tr>
            <td style='background-color:#f6f6f6; width:50%;' >Mentor Exam: </td>
            <td >$exam</td>
            </tr>
            <tr>
            <td style='background-color:#f6f6f6; width:50%;'>PostGraduate Exam: </td>
            <td >$postgrad</td>
            </tr>
            </table>");
            
        while( $row = mysql_fetch_array($query))
        
            {

            $s_name=$row['name'];
            $cert_type=$row['type'];
            $cert_year=$row['year'];
            $s_exper=$row['exper'];
            
            echo("
            <table class='reference' style='width:95%; margin:15px; '>
           <h3 style='margin-top:; margin-left:20px; margin-bottom:-20px; color:#666666;'>
           <b>Subject</b></h3>
           <tr>
            <td style='background-color:#f6f6f6; width:50%;' >Subject Name: </td>
            <td >$s_name</td>
            </tr>
            <tr>
            <td style='background-color:#f6f6f6; width:50%;' >Certification Type: </td>
            <td >$cert_type</td>
            </tr>
            <tr>
            <td style='background-color:#f6f6f6; width:50%;' >Certification Year: </td>
            <td >$cert_year</td>
            </tr>
            <tr>
            <td style='background-color:#f6f6f6; width:50%;' >5 years Experinence: </td>
            <td >$s_exper</td>
            </tr>
            </table>
            
            
            
            ");
            
    
   }
   }
   }
        
        
   function getArray() {
 
	$result = mysql_query("SELECT id FROM teacher");
	
	$IDs = array();
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		$IDs[$i] = $row['id'];
		$i++;
	}
	return $IDs;
} 





























?>