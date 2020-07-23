<?php
	$conn = mysqli_connect("localhost","root","","carrental");

	$search = $_POST["search"];
	// $search = isset($_POST["search"]) ? $_POST["search"] : "null"

	$sql = "SELECT * FROM users WHERE user_Email LIKE '%$search%'";

	$result = mysqli_query($conn, $sql);
    
    if($result->num_rows == 0){
		echo "email is available";
	}else
	 {
		echo "email is already in use";
	}

?>