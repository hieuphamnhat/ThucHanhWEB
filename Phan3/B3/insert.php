<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $sql = "INSERT INTO users (username, password)
	 VALUES ('$username','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
