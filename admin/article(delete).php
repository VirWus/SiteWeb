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
		$sql = "DELETE FROM article WHERE id =  ".$id;
$query2 = mysqli_query($connect,"SELECT lien FROM article WHERE  id = '$id'");
			$query = mysqli_query($connect, $sql);
					$row = mysqli_fetch_assoc($query2);
					$file = base64_decode($row["lien"]);

					if (strpos($file,":") == false ) {
						unlink($file);
					}
header("Location:article.php");



?>
