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
?>

<div class="container-fluid">
	<div class="jumbotron col-md-12 ">
	  <h1>Jayweb</h1>
	  <p>bla blahhhhhhhhhhhhhh</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>What the fuck?</h3>
				<img src="images/azizi1.jpg" width="80%" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum rhoncus suscipit. Integer purus elit, scelerisque eget ante a, sollicitudin porttitor lacus. Proin eget lacinia turpis. Ut enim lorem, venenatis in nisi sit amet, vulputate euismod felis. Vestibulum et nibh nulla. Nullam egestas massa eget augue venenatis malesuada. Morbi ex erat, pellentesque et consectetur vitae, ullamcorper eu sem. Aliquam laoreet convallis odio id fringilla. Quisque placerat sem nisi, ac pretium diam pulvinar a. Curabitur porttitor nulla non ex sagittis semper. Nam vestibulum id justo at feugiat. Phasellus eleifend ornare lacus ut tincidunt. Mauris vel ante vitae justo blandit faucibus. Quisque eu tincidunt quam, ac iaculis mi.
				</p>
			
			</div>
			<div class="col-md-4">
				<h3>Really?</h3>
				<img src="images/azizi1.jpg" width=80%>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum rhoncus suscipit. Integer purus elit, scelerisque eget ante a, sollicitudin porttitor lacus. Proin eget lacinia turpis. Ut enim lorem, venenatis in nisi sit amet, vulputate euismod felis. Vestibulum et nibh nulla. Nullam egestas massa eget augue venenatis malesuada. Morbi ex erat, pellentesque et consectetur vitae, ullamcorper eu sem. Aliquam laoreet convallis odio id fringilla. Quisque placerat sem nisi, ac pretium diam pulvinar a. Curabitur porttitor nulla non ex sagittis semper. Nam vestibulum id justo at feugiat. Phasellus eleifend ornare lacus ut tincidunt. Mauris vel ante vitae justo blandit faucibus. Quisque eu tincidunt quam, ac iaculis mi.
				</p>
			
			</div>
			<div class="col-md-4">
				<h3>Seriously?</h3>
				<img src="images/azizi2.jpg" width=80%>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum rhoncus suscipit. Integer purus elit, scelerisque eget ante a, sollicitudin porttitor lacus. Proin eget lacinia turpis. Ut enim lorem, venenatis in nisi sit amet, vulputate euismod felis. Vestibulum et nibh nulla. Nullam egestas massa eget augue venenatis malesuada. Morbi ex erat, pellentesque et consectetur vitae, ullamcorper eu sem. Aliquam laoreet convallis odio id fringilla. Quisque placerat sem nisi, ac pretium diam pulvinar a. Curabitur porttitor nulla non ex sagittis semper. Nam vestibulum id justo at feugiat. Phasellus eleifend ornare lacus ut tincidunt. Mauris vel ante vitae justo blandit faucibus. Quisque eu tincidunt quam, ac iaculis mi.
				</p>
			
			</div>
		
		</div>

	</div>
