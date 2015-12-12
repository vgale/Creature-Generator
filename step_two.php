<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Monster Maker</title>

<link rel="stylesheet" href="css/uniform.default.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>


<div id="holder">


<?php
    
$name = $_POST["text"];

$monstertype = $_POST["creature_type"];

mail("eric.chen@senecacollege.com", 
        "All Done! Thanks for the help!",
        "From:vano@rogers.com");



$fluffy = array('<img src="images/fluffy/fluffy.jpg" alt="Fluffly little red monster">', '<img src="images/fluffy/fluffy2.jpg" alt="Fluffy blue monster">','<img src="images/fluffy/fluffy3.jpg" alt="Fluffy round green monster">','<img src="images/fluffy/fluffy4.jpg" alt="happy looking little green fluffy monster">');
 
 $meanie = array('<img src="images/meanie/meanie.jpg" alt="Blue monster pulling a scary face">', '<img src="images/meanie/meanie2.jpg" alt="spaceman in a hurry holding weapon">','<img src="images/meanie/meanie3.jpg" alt="Tough-looking iron-faced bad guy">','<img src="images/meanie/meanie4.jpg" alt="Cute furry kitten lying down and lifting up paws">');
 
?>
 
 




<h2 id="h2blue">MONSTER MAKER</h2>
<h4>Step Two: Your monster</h4>


<h2>Thanks 
<?php
  echo $name;
?>!</h2>

<p id="body1"> <?php
echo "Today is " .date("l, F j "); ?>
   and it’s been a busy
    day. <br>But don’t worry!<br>
We have lots of monsters for everyone!!</p>
    
    <p>To see yours, <button type="button" id="myButton" data-loading-text="click here!" class="btn btn-primary">
  click here!!
</button></p>
        
 
 <div id="hide">
        <BR><p>Your monster's name is <h1><?php
     echo $name;
?>onster!!</h1></p>  <!-- NOTE: Validator gave this error " No p element in scope but a p end tag seen." but I do not see any extra p tags that don't have a closing tag. -->  
    
        <p>Enjoy your monster!</p>
        
	<?php
		
	if ($monstertype=="fluffy"){
		echo $fluffy[mt_rand(0,3)] ;
	} else { 
		echo $meanie[mt_rand(0,3)] ;
	}
		?>
        
     <a href="http://localhost/creature_generator/step_one.php">   <button type="button" id="backbutton" data-loading-text="click here!" class="btn btn-primary">Back</button></a> <!-- Error NOTED: "The element button must not appear as a descendant of the a element."-->    
        
        
        
  </div><!--hide div end-->
        

 
  
    
</div><!--holder div end-->








<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
<script>
$(document).ready(function(){
   /* $("#myButton").click(function(){
        $("p").slideUp();
    });*/
    $("#myButton").click(function(){
        $("#hide").show();
    });
});
</script> 
    
    
    
    
    


</body>
</html>
