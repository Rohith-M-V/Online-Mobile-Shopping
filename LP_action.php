<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			#card{
				background-color:#FFFFEF;
				margin:150px;
				height:150px:
				border-radius:5px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
				text-align:center;
				font-size:24px;
				padding:25px;
				margin-left:200px;
				margin-right:200px;
			}			
			#done{
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}	
		</style>
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname ="shopee";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			$email = $_POST["email"];
			$pass = $_POST["password"];
			
			$sql = "SELECT * FROM user WHERE email_id='$email' AND password='$pass'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				header("Location: index.php");	
			}
			else {
				echo "<div id='card'>
						<p>Invalid Id or Password!!!</p>
						<p>Try again with valid Id and Password</p>
						<form action='login.php' method='get'>
							<button type='submit' id='done'>Done</button>
						</form>
					</div>";
			}
		?>
	</body>
</html>