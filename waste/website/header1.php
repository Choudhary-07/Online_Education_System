<?php session_start(); ?>
<html lang="en">

<head>

	<title>Institute an Education Category Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Institute Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Style-sheets -->
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
	<!-- banner -->
	<div class="banner inner-banner" id="home">
		<div class="container">
			<!-- header -->
			<header>

				<div class="header-bottom-w3layouts">
					<div class="main-w3ls-logo">
						<h1><a href="index.php"><span class="fa fa-check-square-o" aria-hidden="true"></span>Institute</a></h1>
					</div>
					<!-- navigation -->
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="home.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="courses.php">Teachers</a></li>
								<li><a href="inst.php">Institutes</a></li>
								<li class="dropdown">
									<a  class="dropdown-toggle" data-toggle="dropdown">Material<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="notes.php">Notes</a></li>
										<li><a href="assignments.php">Assignments</a></li>
										<li><a href="quiz_.php">Quiz</a></li>
										<li><a href="question_paper.php">Question Papers</a></li>
										<li><a href="ppt.php">PPT</a></li>
										<li><a href="video.php">Video</a></li>
								</li>
								</ul>
									<li class="dropdown">
									
									<?php
										 if(isset($_SESSION['Teacher']) || isset($_SESSION['student'])) {?>
										<li>	<a href="logout.php" class="btn btn-info btn-lg" style="border:1px solid rgb(0,182,227);"">
											<span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
									<?php } else  { ?>
									<a class="dropdwown-toggle" data-toggle="dropdown">Contact</a>
									<ul class="dropdown-menu">
										<li><a href="login.php">Sign In</a></li>
										<li><a href="query.php">Contact</a></li>
										<li><a href="Register1.php">Sign Up For Students</a></li>
										<li><a href="Register.php">Sign Up For Teachers</a></li>
									</ul>
									<?php }?>
								</div>
						<!-- /.navbar-collapse -->

					</nav>
					<div class="search-agile-bar">
						<div class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul>
							<!-- cd-header-buttons -->
						</div>
						<div id="cd-search" class="cd-search">
							<form action="#" method="post">
								<div class="agileits-search-field">
									<input name="Search" type="search" placeholder="Click enter after typing...">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- //navigation -->
			</header>
			<!-- //header -->
		</div>
	</div>
	<!-- //banner -->