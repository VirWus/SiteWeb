<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM support where id=".$id;
			$r=mysqli_query($con, $sql);
			  $l = mysqli_fetch_assoc($r);         
			}
			?>

<?php
if($_POST){
$nom=$_POST['nom'];
$annee=$_POST['annee'];	
$resumer=$_POST['resumer'];
$type=$_POST['type'];

		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "UPDATE support  set nom='$nom',annee='$annee',resumer='$resumer',type='$type' where id='$id'";
			$r=mysqli_query($con, $sql);
			header("location:show.php");
		}
			?>
