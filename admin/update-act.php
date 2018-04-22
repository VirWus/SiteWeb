<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<?php
if($_POST){
	$id = $_GET['id'];
$titre=$_POST['titre'];
$date=$_POST['date'];
$contenu=$_POST['contenu'];
$lien=$_POST['lien'];
		include_once("connect/connection.php");
		$sql = "UPDATE actuallite  set titre='$titre',date='$date',contenu='$contenu',lien='$lien' where id='$id'";
			$r=mysqli_query($connect, $sql);

			header("location:Actualite.php");
		}
			?>
