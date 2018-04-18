<?php
if($_GET){
$id = $_GET['id'];
	include_once("../engine/connect/connection.php");
		$sql = "SELECT * FROM admin where id=".$id;
			$r=mysqli_query($connect, $sql);
			}

if($_POST){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$lieu_de_n=$_POST['lieu_de_n'];
$secteur=$_POST['secteur'];
$univ=$_POST['univ'];
$grade=$_POST['grade'];
$email=$_POST['email'];
$username=$_POST['username'];
$mdp=$_POST['mdp'];
$bio=$_POST['bio'];
		include_once("../engine/connect/connection.php");
		$sql = "UPDATE admin  set univ='$univ',grade='$grade',email='$email',username='$username',mdp='$mdp',bio='$bio' where id='$id'";
			$r=mysqli_query($connect, $sql);
			if($r){echo "string";}
			header("location:Accueil.php");
		}
			?>
