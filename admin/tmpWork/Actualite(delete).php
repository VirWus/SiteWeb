<?php

		$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu");
		$sql = "DELETE FROM actuallite WHERE id =  ".$id;
			mysqli_query($con, $sql);
			header("location: Actualite.php");



?>