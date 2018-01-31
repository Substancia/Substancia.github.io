<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<link rel="stylesheet" href="stsh.css">
	<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>National Service Scheme</title>

	<style type="text/css">
		.blogimg img {
			max-width: 600px;
		}
		@media screen and (max-width: 930px) {
			.blogimg img {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<div class="topnav" id="myTopnav" style="padding:10px 20px 10px 20px">
		<img src="icon.png" height="70"; width="70"></img>Blogpage
		<a href="contact6.html">Contact us</a>
		<a href="login1.html">Login</a>
		<a href="blog1.html">Blog</a>
		<a href="about.html">What we do</a>
		<a href="index.html">Home</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

<div class="container-class" id="blog">
	<div style="padding:140px 10% 0px 10%">

<?php
$servername = "localhost";
$username = "root";
$password = "wmo_16_17";
$dbname = "nss_17_18";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM blogs ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
        <h1><?php echo $row["title"];?></h1>
        <div style="height: 2px; width: 200px; background-color: darkgrey;"></div>
        <center><div class="blogimg"><img src="<?php echo $row['image_url'];?>"></div><br></center>
        <p><?php echo $row["description"];?></p><div style="height: 1px; width: 100%; background-color: darkgrey;"></div><br><br>









    <?php
	}
} else { ?>

<center><p style="font-size:18px;">Sorry, this section is not active yet.</p></center>
	</div>

    <?php
}
$conn -> close() ;

?>

























</div>
	
	<footer class="site-footer">
		
		Designed by:
		<div>
			<div class="chip">
				<a href="http://substancia.github.io" target="_blank">
					<img src="https://avatars2.githubusercontent.com/u/27500147?v=3&u=da556d749664aa6bbd83f48eccec92299ddcacac&s=400" alt="Person" width="96" height="96">
					<div class="chipoverlay">
						<div class="chiptext">Mohammad Jibin</div>
					</div>
				</a>
			</div>
			<div class="chip">
				<a href="http://joeydash.com" target="_blank">
					<img src="https://avatars0.githubusercontent.com/u/25436112?v=3&s=400" alt="Person" width="96" height="96">
					<div class="chipoverlay">
						<div class="chiptext">Mritunjoy Das</div>
					</div>
				</a>
			</div>
		</div>
		
		<center>© National Service Scheme, IIT Madras</center>
		
	</footer>
	
	<script>
	
		function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
	
	</script>
	

</body>
</html>
