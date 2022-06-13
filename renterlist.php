<?php
session_start();
	
include("Connection.php");


	$sql = "SELECT * FROM renter";
	$result = mysqli_query($con,$sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){

		$name = $row['renter_name'];
		$icnumber = $row['renter_ic'];
		$contact = $row['renter_phone'];
		$person = $row['renter_email'];
		}
	}

?>


<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ITMS &mdash; RENTERLIST</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	
	<<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="HomepageAdmin.php">ITMS</a></h1>

						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="HomepageAdmin.php">Back</a>
								</li>
				</div>
			</header>
			
		
		
		
		
<body>

<style type="text/css">

		#text{

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button{

			padding: 10px;
			width: 100px;
			color: white;
			background-color: black;
			border: none;
		}

		#box{

			background-color: teal;
			margin: auto;
			width: 95%;
			padding: 20px;
			height: 100%;
		}

		#box1{
			background-color: lightblue;
			margin: auto;
			width: 900px;
			padding: 20px;
		}

		#table,th,td{
			border: 1px solid black;
			text-align: center;
		}


	</style>

<div id="box">
	<div id="box1">


	<div class="form">

<h2>RENTER LIST</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
	<th><strong>Renter ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>IC Number</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>Email</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
	<?php
$count=1;
$sel_query="Select * from renter;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["renter_name"]; ?></td>
<td align="center"><?php echo $row["renter_ic"]; ?></td>
<td align="center"><?php echo $row["renter_phone"]; ?></td>
<td align="center"><?php echo $row["renter_email"]; ?></td>

<td align="center">
<a href="deleterenter.php">Delete</a>
</td>
</tr>
<?php $count++; } ?>

</tbody>
</table>



</div>
</body>
</html>
	