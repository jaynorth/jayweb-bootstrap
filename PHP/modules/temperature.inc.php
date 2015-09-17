<?php # Script 2.5 - main.inc.php

/* 
 *  This is the main content module.
 *  This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.


///////////////////////////////////////////////////////////////
//FUNCTION/////////

function farenheit_conv($farenheit){
	$celcius = ($farenheit-32)/1.8;
	return $celcius;
	
}

if ($_SERVER['REQUEST_METHOD']== 'POST'){
	//echo"form submitted<br />";
	$farenheit = $_POST['farenheit'];
	if (!is_numeric($farenheit)){

		$message = "<br /><b>You need to input a numeric value !!</b>";
	}else {
		$result = round(farenheit_conv($farenheit), 1);
		//echo "$farenheit is numeric<br />";
		$message = "<br />$farenheit Farenheit is <b>$result</b> in  Celcius<br />";
		
	}
	//echo"<br />Farenheit : $farenheit<br />";
}else{
	$message = "Please submit form";
}
//////////////////////////////////////////////////////////////////////////////////

?>

<div class="container">
	<h1>Farenheit to Celcius Converter</h1>

	<form role="form" action="temperature" method="POST" class="col-md-3" >
	<fieldset class="form-group">
	<legend>Temperature Converter</legend>
	<input type="text" name="farenheit" value="enter farenheit value" class="form-control">
	<p>Enter a value in Farenheit you would like to convert to celcius</p>
	<input type="submit" name="submit" value ="submit" class="btn btn-default" >
	</fieldset>
	<?php echo $message; ?>
	</form>
</div>