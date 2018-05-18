<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
		<link rel="shortcut icon" type="image/x-icon" href="https://i0.wp.com/animoto.com/blog/wp-content/uploads/2016/08/160726_5secondhook.jpg?resize=582%2C388&ssl=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Student Image search</title>

</head>
<body>
	<center>
		<?php
			// session_start();
			// $servername= "10.24.0.224";		//database connection parameter
			// $username="root";	//database connection parameter
			// $password="wmo_16_17";		//database connection parameter
			// $dbname="students";	//database connection parameter

			//create connection
			// $conn = new mysqli($servername,$username,$password,$dbname);

			//check for connection error
			// if ($conn->connect_error)
			// {
			// 	die("No network!" . $conn->connect_error);	//Error management
			// }
			$id=$_POST["roll"];
			// echo "Welcome ";
			// //getting credentials from database
			// $sql ="SELECT * FROM logindb WHERE (name='$name' OR email='$name') AND password='$password'";
			// $result = $conn->query($sql);
			// if ($result->num_rows > 0 )
			// {
			// 	while($row=$result->fetch_assoc())
			// 	{
			// 		$id=$row["id"];
			// 		$name=$row["name"];
			// 		$email=$row["email"];
			// 		$gender=$row["gender"];
			// 		$hobbies=$row["hobbies"];
			// 		$num=$row["num"];
			// 	}
				
				
			// }else {
			// 	header("Location: signup.php");
			// 	die();
			// }

				
				// $conn->close();	
	?>
	<img src="http://photos.iitm.ac.in/byroll.php?roll=<?php echo $id;?>" style="width:200px;height:200px;"><br><br><br>
	
	</center>
</body>
</html>