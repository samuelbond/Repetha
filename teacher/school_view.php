<?php

require 'function.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="/teach/css/style.css" />
</head>
<body class="bodyi">
<div id="left"></div>
<div id="tab"></div>
<div id="head"></div>
<div id="home">
<a href="../index.php" style="color:#fff; font-size:15px; text-decoration:none;"><b>Home</b></a>
</div>
<div id="round"></div>

<div id="round_title"><?php schoolTitle(); ?></div>
<div id="sch_despace">
<div id="round2"></div>
<div id="round_menu1"></div>
<div id="round_menu2"></div>
<div id="round_menu3"></div>
<div id="round_menu4"></div>
<div id="round_menu5"></div>
<div id="round2_title"><b>Details</b></div>
<div id="round_menu1_title">Teachers</div>
<h3 class="left">School Details</h3>

<?php listSchoolTeacher(); ?>





</div>


        
        </body>
        </html>