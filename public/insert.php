<!DOCTYPE html>
<html>

<head>
	<title>Add your CV</title>
</head>

<body>
   
	<center>
	<h1>Add your CV</h1>

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "cv");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		// when making columns in doctine, it automatically inserts id as a primary key
		// I have commented that and changed to 'names' a primary key
		
		$names = $_REQUEST['names'];
		$profession = $_REQUEST['profession'];
		$age = $_REQUEST['age'];
		$number = $_REQUEST['number'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO cv VALUES ('$names',
			'$profession','$age','$number')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database."
				. " Please browse your localhost php my admin/MySQL Workbench/mysql command line client"
				. " to view the updated data</h3>";

			echo nl2br("\n Names: $names\n profession: $profession\n "
				. "age: $age\n number: $number");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
