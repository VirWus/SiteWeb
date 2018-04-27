<?php

session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}

		$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu");
		$sql = "DELETE FROM actuallite WHERE id =  ".$id;
			mysqli_query($con, $sql);
			header("location: Actualite.php");



?>
