<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<?php
if($_GET){
$id = $_GET['id'];
	include_once("../engine/connect/connection.php");
		$sql = "SELECT * FROM admin where id=".$id;
			$r=mysqli_query($connect, $sql);
			}


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
 $epass = hash("sha512",$mdp).md5("univ_bba");
$bio=$_POST['bio'];
		include_once("../engine/connect/connection.php");
		$sql = "UPDATE admin  set univ='$univ',grade='$grade',email='$email',username='$username',mdp='$epass',bio='$bio' where id='$id'";
			$r=mysqli_query($connect, $sql);
			if($r){echo "string";}
			header("location:Accueil.php");
		
			?>
