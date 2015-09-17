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
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="images\electrovintage\186745710vu6.jpg" alt="...">
      			<div class="caption">
	        		<h3>Weltron 2007</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="http://www.collectibleradios.com/files/2232043/uploaded/Crosley%20D-25%20front.JPG" alt="...">
      			<div class="caption">
	        		<h3>Crosley Radio</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="http://www.nicolasverdon.fr/docs/Images%20FC4D/nagra-1.jpg" alt="...">
      			<div class="caption">
	        		<h3>Nagra IV S</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="http://www.bignick.net/images/RadioPix/7_tube/7_tube_front.jpg" alt="...">
      			<div class="caption">
	        		<h3>antique radio</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="http://audio-database.com/PIONEER-EXCLUSIVE/player/ct-a1.JPG" alt="...">
      			<div class="caption">
	        		<h3>cassette player</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
      			<img src="http://www.radiohannibal.com/.a/6a00d83420a02f53ef017ee50de14f970d-pi" alt="...">
      			<div class="caption">
	        		<h3>audio console</h3>
	        		<p>...</p>
	        		<p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      			</div>
    		</div>
  		</div>
	</div>
</div>