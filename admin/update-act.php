
<?php
if($_POST){
	$id = $_GET['id'];
$titre=$_POST['titre'];
$date=$_POST['date'];
$contenu=$_POST['contenu'];
$lien=$_POST['lien'];
		include_once("../engine/connect/connection.php");
		$sql = "UPDATE actuallite  set titre='$titre',date='$date',contenu='$contenu',lien='$lien' where id='$id'";
			$r=mysqli_query($connect, $sql);

			header("location:Actualite.php");
		}
			?>
