<?php
// W e didn't Have to Require or Include Config again because it's already 
// been called on by the function of School so since both pages will be running 
// together we allow teacher function to use school resources to perform it's Job 
// Finally in this case we will delete menu in both school & teacher

 function safeRes($value){
    
    return mysql_real_escape_string($value);
    
 }
function listTeachers()
{
    
        $query="SELECT teacher.id, teacher.t_name, school.name FROM teacher STRAIGHT_JOIN school 
        ON teacher.school=school.om_id ORDER BY teacher.id";

    $result=mysql_query($query);
  
    while ($row = mysql_fetch_array($result))
    {
        $id=safeRes($row['id']);
        $name=safeRes($row['t_name']);
        $sname=safeRes($row['name']);
  
echo("    
    <table class='reference' style='width:100%;'>
    
    <tr>
    <td style='width:50%;'><a href='". BASE_UTL . "/teacher/view.php?id=$id'>$name</a></td>
    <td>$sname</td>
    </tr>
    </table>
    ");
    }
    }
 
 
    



    




?>