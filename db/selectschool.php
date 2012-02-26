<?php

require 'config.php';
connect();


    //List School names in a drop down list
    function selectSchool()
    {

    $query = "SELECT om_id, name FROM school" ;
    $result = mysql_query($query);
    echo'<select name="sch_name_id">';
    while($row = mysql_fetch_assoc( $result )) {
    echo '<option>Please Select a School</option>';
    echo '<option value="'.$row['om_id'].'">' . $row['name'] . '</option>';
    }
    echo '</select>';

}


?>