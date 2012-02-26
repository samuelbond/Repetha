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


function profile()
{
    if (isset($_GET['id']))
    {
    $studentID = $_GET['id'];       
        
      safeRes($studentID);  
        
      $query = mysql_query("SELECT name, email, phone, neptun, address FROM student WHERE id='$studentID'");
        
       $row = mysql_fetch_array($query); 
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $neptun = $row['neptun'];
        $address = $row['address'];
        
        echo ("<table class='reference' style='width:95%; margin:15px; '><tr>
        <td style='background-color:#f6f6f6;' >Full Name: </td>
        <td>$name</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Email: </td>
        <td>$email</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Telephone: </td>
        <td>$phone</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Neptun Code: </td>
        <td>$neptun</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Address: </td>
        <td>$address</td>
        </tr>
        ");
    }
    
    else header("location: 404.php");
    
}


function profileTitle(){
    
    if (isset($_GET['id'])){
        
        $titleID= $_GET['id'];
        
        $sql = mysql_query("SELECT name FROM student WHERE id='$titleID'");
        $row = mysql_fetch_array($sql);
        echo $row['name'];
        
        
        
        
    }
    
    
}

function studentStatus(){
    
    if (isset($_GET['id'])){
        
        $ID= $_GET['id'];
        
        $query = mysql_query("SELECT status FROM student WHERE id='$ID'");
        $row = mysql_fetch_array($query);
        $value = $row['status'];
        
        if ($value == 1){
            
            echo ("Active");
        }
        
        else echo("Not Active");
        
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