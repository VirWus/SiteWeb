<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM actuallite WHERE id =  ".$id;
			$r=mysqli_query($con, $sql);
			           
			}
			?>
<?php
if($_POST){
$titre=$_POST['titre'];
$date=$_POST['date'];	
$contenu=$_POST['contenu'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "UPDATE actuallite  set titre='$titre',date='$date',contenu='$contenu' WHERE id=".$id;
			$r=mysqli_query($con, $sql);
			         
			header("location:Actualite.php");
		}
			?>

