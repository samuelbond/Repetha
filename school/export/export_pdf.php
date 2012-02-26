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

//PDF FUNCTION
$pdf = PDF_new();
$FileName=("school.pdf");
PDF_open_file($pdf,$FileName);
PDF_set_info($pdf,"Author","Repetha");
PDF_set_info($pdf,"Title","School Details");
PDF_begin_page($pdf,595,842);
$font=PDF_findfont($pdf,"Times New Roman","winansi",1);
PDF_setfont($pdf,$font,20);
PDF_show_xy($pdf,"Name of School: " . $s_name,50,750);
PDF_end_page($pdf);
PDF_close($pdf);
PDF_delete($pdf);
$length=filesize($FileName);

        header("content-type: application/pdf");
        
        header("content-length: $length");
        // It will be called downloaded.PDF
        header('Content-Disposition: inline; filename="school_detail.pdf"');

        // The PDF source is in original.PDF
        readfile($FileName);

}












?>