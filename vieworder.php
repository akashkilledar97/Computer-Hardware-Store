
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Orders</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
	.footer{
	position:fixed;
	left:0;
	bottom:0;
	width:100%;
	color: #d5d5d5;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
		
	</head>
	<body background="images/2.jpg" height="100%">

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
				</ul>
			</div>
		</div>
		</nav>
		<table id="customers">
			<tr>
				<th>sl.no</th>
				<th>name</th>
				<th>address</th>
				<th>product</th>
				<th>quantity</th>
			</tr>
		<?php
			require('connect.php');
			
			$q = "select * from `order`";
			
			$re = mysqli_query($con, $q);
			if(!$re)
			{
				die("Error</br>".mysqli_error($con));
			}
			else{
				while($row = mysqli_fetch_row($re))
				{
					echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
				}
			}
			
		?>
		</table>
		</body>
		
		
		<footer>
    <div class="footer" style="background-color: black;">
        <div class="row">
            <div class="col-sm">
              <b>Site Links</b><br>
                  <a href="index.php">Home</a><br>
                  <!-- <a href="#"">Medecines</a><br> -->
                  <a href="#""></a><br>
                      <a href="#"></a><br>
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