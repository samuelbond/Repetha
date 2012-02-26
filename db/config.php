<?php
// Database config settings

function connect()
{
    $link= mysql_connect('localhost', 'root'); //SQL Connection settings where user is root with No password
    if (!$link)
    {
        die('Could not Connect to db'. mysql_error());
    }
$db=mysql_select_db('repetha') or die('Could not select db'. mysql_error());  //Selection of Database in this case Repetha
// Edit DB name above if it should change to new DB name
define('BASE_URL', 'http://localhost/teach');
define('BASE_UTL', 'http://localhost/teach');
}

























?>