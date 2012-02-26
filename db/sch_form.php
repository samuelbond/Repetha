<?php



?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link type="text/css" rel="stylesheet" href="/teach/css/style.css" />
<script type="text/javascript" src="formval.js" >
</script>
</head>
<body>

<form autocomplete="off" method="post" action="db_form_send.php" name="SForm" onsubmit="return ValidateSForm();">
<div class="box">
<h1>School Details</h1>
<label>
<span>Name Of School: </span>
<input class="input_text" name="sch_name" type="text" />

</label>

<label>
<span>OM ID/Code: </span>
<input name="om_id" type="text" class="input_text" />

</label>

<label>
<span>Type: </span>
<input name="type" type="text" class="input_text" />

</label>

<label>
<span>School Contact: </span>
<input name="cont_c_name" type="text" class="input_text" />

</label>
<label>
<span>Status: </span>
<select name="status_c_name" style="width:200px;">
<option>Select One</option>
<option>gyakorlo</option>
<option>bazis</option>
<option>partner</option>
<option>egyeb</option>
</select>

</label>
<h1>School Address</h1>

<label>
<span>Street</span>
<input class="input_text" name="street" type="text" />
</label>

<label>
<span>City</span>
<input class="input_text" name="city" type="text" />
</label>

<label>
<span>County</span>
<input class="input_text" name="county" type="text" />
</label>

<label>
<span>Zip Code</span>
<input class="input_text" name="zip" type="text" />
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
<span>Website</span>
<input class="input_text" name="web" type="url" />


</label>
<label>
<input type="submit" value="Register" class="button" /></label>

</div>

</form>







</body>


</html>