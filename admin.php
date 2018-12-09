<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>home</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<!--navigation bar-->
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
		<a class="navbr-brand" href="index.php"><img src="images/title_img.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="vieworder.php">View Orders</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><?php echo $_GET['uname'];?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
		</nav>
		<!--navigation end-->
		
		<!--Image slider-->
		<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" class=""></li>
		<li data-target="#slides" data-slide-to="2" class=""></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/first_slide.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">Welcome</h1>
				<h3>Computer Hardware Store</h3>
				<button type="button" class="btn-primary btn-outline-dark btn-lg " >
					<a class="nav-link" href="#our_p.html"> Our Products </a>
				</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/sec_slide.jpg">
		</div>
		<div class="carousel-item">
			<img src="images/third_slide.jpg">
		</div>
	</div>
</div>
		
		<!--Image slider end-->
		
	</body>
	<footer>
    <div class="footer" style="background-color: black;">
        <div class="row">
            <div class="col-sm">
              <b>Site Links</b><br>
                  <a href="index.php">Home</a><br>
                  <!-- <a href="#"">Medecines</a><br> -->
                  <a href="#"">About Us</a><br>
                      <a href="#">Contact Us</a><br>
            </div>
            <div class="col-sm"><b>Social Links </b><br/> <a href="#"><i class="fab fa-facebook" style="font-size: 50px;"></i></a>
              <a href="#"><i class="fab fa-instagram" style="font-size: 50px;"></i></a>
               <a href="#"><i class="fab fa-youtube" style="font-size: 50px;"></i></a>
              <a href="#"><i class="fab fa-twitter-square" style="font-size: 50px;"></i></a>
             </div>
            </div>
            <hr>
            Designed and Developed by Kishan Tambralli and Akash Killedar
    </div>
    </footer>
</html>
</html>