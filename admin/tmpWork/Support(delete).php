<?php

		$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu");
		$sql = "DELETE FROM support WHERE id =  ".$id;
			mysqli_query($con, $sql);
			header("location: Support.php");



?>