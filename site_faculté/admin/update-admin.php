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

// $file = $directory.basename($_FILES["file"]["name"]);


$email=$_POST['email'];
$username=$_POST['username'];
// $pathparts = pathinfo($file);
$mdp=$_POST['mdp'];
 $epass = hash("sha512",$mdp).md5("univ_bba");

// $ext =  $pathparts["extension"];
// if($ext === "jpg" || $ext === "png") {
// 	move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
// 	$file = base64_encode($file);
// 		include_once("../engine/connect/connection.php");
// 		$sql1="SELECT * FROM admin WHERE id='$id'";
// 		$i=mysqli_query($connect, $sql1);
// 		if($row=mysqli_fetch_assoc($i)){
// 			$imgh=base64_decode($row["image"]);
// 			if(!unlink($imgh)){
// 				echo "false";
// 			}
// 			 ;
// 		}
		$sql = "UPDATE admin set email='$email',username='$username',mdp='$epass' where id='$id'";	
		$r=mysqli_query($connect, $sql);
		
			header("location:admin.php");
		
		
			?>