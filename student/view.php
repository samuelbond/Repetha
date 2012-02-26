<?php 



function liststudent()
{
    
    $query= mysql_query("SELECT id, name, email, neptun FROM student");
    
    while ($row=mysql_fetch_array($query))
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $neptun = $row['neptun'];
        
        echo(" 
        <table class='reference' style='width:100%;'>
    
    <tr>
    <td style='width:40%;'><a href='". BASE_UTL . "/student/profile.php?id=$id'>$name</a></td>
    <td style='width:40%;'>$email</td>
    <td style='width:20%;'>$neptun</td>
    </tr>
    </table>
        
        
        
        ");
        
    }
    
    
    
    
}




























?>