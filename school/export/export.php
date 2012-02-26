<?php

//this is the directory the file is in
define('CURRENT_DIR',dirname(__FILE__));
//this is the next directory up
define('CHILD_DIR',dirname(dirname(__FILE__)));
define('PARENT_DIR',dirname(dirname(dirname(__FILE__))));

//if you wanted to use this in a require
require_once PARENT_DIR . "/db/config.php";


connect();
function safeData($value){
    
    return mysql_real_escape_string($value);
    
}


	if (isset($_GET['id'])) {
		$pageID = (int) $_GET['id'];
        safeData($pageID);
		$result = mysql_query("SELECT name,om_id,type,status,sch_contact,street,city,county,
        zip,phone,email,web FROM school WHERE id='$pageID'");
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
        
        $xml="<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
        $xml .="<schools>";
        $xml .="<school>\n";
        $xml .="<details>\n";
        $xml .=" <name><![CDATA[" . $s_name ."]]></name>\n";
        $xml .="<om_id><![CDATA[" . $s_om ."]]></om_id>\n";
        $xml .="<type><![CDATA[" . $s_type ."]]></type>\n";
        $xml .="<status><![CDATA[" . $s_status ."]]></status>\n";
        $xml .="<contact><![CDATA[" . $s_contact . "]]></contact>\n";
        $xml .="</details>\n";
        $xml .="<address>\n";
        $xml .="<street><![CDATA[" . $s_street . "]]></street>\n";
        $xml .="<city><![CDATA[" . $s_city . "]]></city>\n";
        $xml .="<county><![CDATA[" . $s_county ."]]></county>\n";
        $xml .="<zip><![CDATA[" . $s_zip ."]]></zip>\n";
        $xml .="<phone><![CDATA[" . $s_phone . "]]></phone>\n";
        $xml .="<email><![CDATA[" . $s_email . "]]></email>\n";
        $xml .="<website><![CDATA[" . $s_web . "]]></website>\n";
        $xml .="</address>\n";
        $xml .="</school>\n";
        $xml .="</schools>";
        
        $FileName = "school.xml";
        $FileHandle = fopen($FileName, 'w') or die("can't open file");
        fwrite($FileHandle, $xml);
        fclose($FileHandle);
        
        // We'll be outputting a XML
        header('Content-type: text/xml');

        // It will be called downloaded.XML
        header('Content-Disposition: attachment; filename="school_export.xml"');

        // The PDF source is in original.XML
        readfile('school.xml');
  
       
        }


?>