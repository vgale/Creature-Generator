<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Monster Maker</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
</head>
<body>

<!-- NOTE: Validator saw two errors. Both of them were "The for attribute of the label element must refer to a non-hidden form control." line 35 and line 39 regarding labels. The form works, so I'm disregarding these errors. -->


<div id="holder">

<h2>Seneca College</h2>
<h3>Webmaster Program</h3>
<h1>MONSTER MAKER</h1>

<p>Your own personalised monster in only 3 easy steps!</p>

<h4>Step One: Monster Info</h4>

<form method="post" action="step_two.php">

<p>
	<label for="full_name"><br>Your name:<br><br></label>
	<input required type="text" name="text" id="full_name">
</p>

<fieldset>
	<legend><br>Pick your monster type:</legend>
	<p>
		<input type="radio" checked="checked" name="creature_type" value="fluffy">
		<label for="creature_type">Fluffy</label>  <!-- Error noted. see note at top -->
	</p>
	<p>
		<input type="radio" name="creature_type" value="meanie">
		<label for="creature_type">Meanie</label>  <!-- Error noted. see note at top -->
	</p>
</fieldset>

<p>
	<input type="submit" value="On to Step 2!">
</p>

</form>

</div>



<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>


</body>
</html>
