<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<?php

		$id = $_GET['id'];
		include_once("../engine/connect/connection.php");
		$sql = "DELETE FROM module WHERE id =  ".$id;
		$query = mysqli_query($connect, $sql);
					
header("Location:support.php");



?>
