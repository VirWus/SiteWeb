<?php
if($_GET){
$id = $_GET['id'];
	include_once("../engine/connect/connection.php");
		$sql = "SELECT * FROM actuallite WHERE id =  ".$id;
			$r=mysqli_query($connect, $sql);

			}
			?>
<?php
if($_POST){
$titre=$_POST['titre'];
$date=$_POST['date'];
$contenu=$_POST['contenu'];
		$sql = "UPDATE actuallite  set titre='$titre',date='$date',contenu='$contenu' WHERE id=".$id;
			$r=mysqli_query($connect, $sql);

			header("location:Actualite.php");
		}
			?>
