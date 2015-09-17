<?php # Script 2.2 - header.html
// This page begins the HTML header for the site.

// Check for a $page_title value:
if (!isset($page_title)) $page_title = 'Default Page Title';
?><!DOCTYPE HTML>
<html>

<head>
  <title><?php echo $page_title; ?></title>

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
							<li class="active" ><a href="index.php">Home</a></li>
							<li><a href="dev">dev</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li ><a href="temperature">Temperature converter</a></li>
									<li ><a href="#">Currency converter</a></li>
									<li ><a href="#">measurements converter</a></li>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li ><a href="electrovintage">Vintage electronics</a></li>
									<li ><a href="vinyl">Vinyl Album Covers</a></li>
									<li ><a href="raspberry">Raspberry</a></li>	
								</ul>
							</li>
							<li><a href="photo">Photography</a></li>
							<li><a href="contact">Contact</a></li>
						
						</ul>

						
					</div>



					

			</div>	

		</nav>

<!-- End of Header -->