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
			$directory = "../img/";

$file = $directory.basename($_FILES["fileto"]["name"]);
$univ=$_POST['univ'];
$grade=$_POST['grade'];
$email=$_POST['email'];
$username=$_POST['username'];
$pathparts = pathinfo($file);
$mdp=$_POST['mdp'];
 $epass = hash("sha512",$mdp).md5("univ_bba");
$bio=$_POST['bio'];
$ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png") {
	move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
	$file = base64_encode($file);
		include_once("../engine/connect/connection.php");
		$sql1="SELECT * FROM admin WHERE id='$id'";
		$i=mysqli_query($connect, $sql1);
		if($row=mysqli_fetch_assoc($i)){
			$imgh=base64_decode($row["image"]);
			if(!unlink($imgh)){
				echo "false";
			}
			 ;
		}
		$sql = "UPDATE admin  set univ='$univ',grade='$grade',email='$email',username='$username',mdp='$epass',bio='$bio',image='$file' where id='$id'";	
		$r=mysqli_query($connect, $sql);
		
			header("location:Accueil.php");
		}else{
			echo "Your file is not supported";
		  }
		
			?>
