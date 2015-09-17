<?php 


// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.
?>
<div class="container">
	<div class="row">
	<h1>Contact Us</h1>	
		<div class="col-md-6 ">
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label class="control-label" >Email: </label>
						<input type="email" id="email" placeholder="Enter Email" class="form-control">
					<label class="control-label">Leave a Message</label>	
						<textarea class="form-control" rows="10"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-default">Submit</button> 
				</div>
			</form>

		</div>
	</div>
</div>