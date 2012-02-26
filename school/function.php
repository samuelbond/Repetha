<?php


//this is the directory the file is in
define('CURRENT_DIR',dirname(__FILE__));
//this is the next directory up
define('PARENT_DIR',dirname(dirname(__FILE__)));


//if you wanted to use this in a require
require_once PARENT_DIR . "/db/config.php";


connect();

function safeData($value){
    
    return mysql_real_escape_string($value);
    
}

function listSchool(){

$query= mysql_query("SELECT id, name, om_id, status FROM school");

while ($row = mysql_fetch_array($query))
{
    $id= $row['id'];
    $sname= $row['name'];
    $code = $row['om_id'];
    $status = $row['status'];
    
    
    echo ("
    
    <table class='reference' style='width:100%;'>
    
    <tr>
    <td style='width:50%;'><a href='". BASE_URL . "/school/view.php?id=$id'>$sname</a></td>
    <td style='width:20%;'>$code</td>
    <td>$status</td>    
    </tr>
    </table>
    ");
}


mysql_free_result($query);

}

// Display page title
function schoolTitle() {
	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeData($pageID);	
		$result = mysql_query("SELECT name FROM school WHERE id='$pageID'");
		$row = mysql_fetch_array($result);
	
		echo $row['name'];
	} else {
	header('location: 404.php');
	}
}

function schoolDetails() {
	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeData($pageID);
		$result = mysql_query("SELECT name,om_id,type,status,sch_contact,street,city,county,
        zip,phone,email,web,contact_person,contact_email FROM school WHERE id='$pageID'");
		$row = mysql_fetch_array($result);
		$s_name=$row['name'];
        $s_om=$row['om_id'];
        $s_type=$row['type'];
        $s_status=$row['status'];
        $s_contact=$row['sch_contact'];
        $s_street=$row['street'];
        $s_city=$row['city'];
        $s_county=$row['county'];
        $s_zip=$row['zip'];
        $s_phone=$row['phone'];
        $s_email=$row['email'];
        $s_web=$row['web'];
        $person = $row['contact_person'];
        $p_email = $row['contact_email'];
        echo ("<table class='reference' style='width:95%; margin:15px; '><tr>
        <td style='background-color:#f6f6f6;' >School Name: </td>
        <td >$s_name</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >OM ID/CODE: </td>
        <td>$s_om</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Type: </td>
        <td>$s_type</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Status: </td>
        <td>$s_status</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Contact: </td>
        <td>$s_contact</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Contact Person: </td>
        <td >$person</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Contact Email: </td>
        <td >$p_email</td>
        </tr>
        </table>
        <h3 style='font-family:sans-serif; color:#666666; margin:10px;display:block;'>Contact Information</h3>
        <table class='reference' style='width:95%; margin:15px; '><tr>
        <td style='background-color:#f6f6f6;' >Street: </td>
        <td >$s_street</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >City: </td>
        <td >$s_city</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >County: </td>
        <td >$s_county</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Zip Code: </td>
        <td >$s_zip</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Telephone: </td>
        <td >$s_phone</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Email: </td>
        <td >$s_email</td>
        </tr>
        <tr>
        <td style='background-color:#f6f6f6;' >Website: </td>
        <td >$s_web</td>
        </tr>
        
        ");
        
		
	} else {
	
    header('location: 404.php');
	}
}

        function displayTeacher()

{
	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeData($pageID);
    $query=mysql_query("SELECT id,om_id FROM school WHERE id='$pageID'");
    $row = mysql_fetch_array($query);
    $id= $row['om_id'];
    $n_query=mysql_query("SELECT id,t_name,school,email FROM teacher WHERE school='$id'");
    
    while ($row= mysql_fetch_array($n_query))
    {
        $t_id=$row['id'];
        $t_name=$row['t_name'];
        $t_email=$row['email'];
        
        echo ("
        <table class='reference' style='width:95%; margin:10px; '>
        <tr style=' margin-bottom:-10px;'>
        <td style='width:50%;'><a href='". BASE_URL . "/teacher/view.php?id=$t_id'>$t_name</td>
        <td>$t_email</td>
        </tr>
        </table>
        ");
        
    }
    
    
    
}
}

function getArray() {
	$result = mysql_query("SELECT id FROM school");
	
	$IDs = array();
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		$IDs[$i] = $row['id'];
		$i++;
	}
	return $IDs;
}








?>






