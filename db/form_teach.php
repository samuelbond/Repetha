<?php
    
require 'selectschool.php';
    

?>

<!DOCTYPE HTML >
<html>
<head>
<link type="text/css" rel="stylesheet" href="/teach/css/style.css" />
<script type="text/javascript" src="formval.js" >
</script>
</head>
<body>

<form autocomplete="off" onsubmit="return ValidateForm();" method="post" action="teach_send.php" name="SForm" >
<div class="box">
<h1>Personal Details</h1>
<label>
<span>Name: </span>
<input class="input_text" name="name" type="text" />

</label>

<label>
<span>Status: </span>
<input name="status" type="text" class="input_text" />

</label>

<label>
<span>Other info: </span>
<input name="other" type="text" class="input_text" />

</label>

<label>
<span>Select School: </span>
<?php selectSchool(); ?>
</label>

<h1>Contact Details</h1>

<label>
<span>Address</span>
<input class="input_text" name="address" type="text" />
</label>

<label>
<span>Telephone</span>
<input class="input_text" name="phone" type="text" />
</label>

<label>
<span>Email</span>
<input class="input_text" name="email" type="text" />
</label>

<label>
<span>Mento Exam</span>
<select name="exam">
<option>Select</option>
<option>Yes</option>
<option>No</option>
</select>
</label>

<label>
<span>Post Graduate Exam</span>
<select name="grad">
<option>Select</option>
<option>Yes</option>
<option>No</option>
</select>
</label>

<h1>Subject Details</h1>
<label>
<span>Subject Name</span>
<input class="input_text" name="subject" type="text" />
</label>

<label>
<span>Type of Certification</span>
<input class="input_text" name="type" type="text" />
</label>

<label>
<span>Year of Certification</span>
<input class="input_text" name="year" type="text" />
</label>

<label>
<span>Do you Have 5 years experinece in this Subject?</span>
<select name="exper">
<option>Select</option>
<option>Yes</option>
<option>No</option>
</select>
</label>
<label>
<input type="submit" value="Register" class="button" /></label>

</div>

</form>







</body>


</html>