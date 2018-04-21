<?php

		$id = $_GET['id'];
		include_once("../engine/connect/connection.php");
		$sql = "DELETE FROM support WHERE id =  ".$id;
$query2 = mysqli_query($connect,"SELECT lien FROM support WHERE  id = '$id'");
			$query = mysqli_query($connect, $sql);
					$row = mysqli_fetch_assoc($query2);
					$file = base64_decode($row["lien"]);
					
					if (strpos($file,":") == false ) {
						unlink($file);
					}
header("Location:support.php");



?>
