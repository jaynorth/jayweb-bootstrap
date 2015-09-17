<?php # header.php
// This page begins the HTML header for the site.

// Check for a $page_title value:
if (!isset($page_title)) $page_title = 'Default Page Title';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title;?></title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel ="stylesheet">
		<link href="css/style.css" rel ="stylesheet">
		
		
		
	</head>
	<body>
		<nav class="navbar navbar-inverse static-top">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">JayWeb</div>

					<button class="navbar-toggle" data-toggle = "collapse" data-target =".navHeaderCollapse">
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
				</div>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active" ><a href="#">Home</a></li>
							<li><a href="#">dev</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li ><a href="#">Temperature converter</a></li>
									<li ><a href="#">Currency converter</a></li>
									<li ><a href="#">measurements converter</a></li>	
								</ul>
							</li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Contact</a></li>
							
						</ul>
					</div>

			</div>	

		</nav>

<!-- End of Header -->