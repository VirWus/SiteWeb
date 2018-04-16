<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM admin where id=".$id;
			$r=mysqli_query($con, $sql);    
			}
			?>

<?php
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
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "UPDATE admin  set nom='$nom',prenom='$prenom',date='$date',lieu_de_n='$lieu_de_n',secteur='$secteur',univ='$univ',grade='$grade',email='$email',username='$username',mdp='$mdp',bio='$bio' where id='$id'";
			$r=mysqli_query($con, $sql);
			if($r){echo "string";}
			header("location:show.php");
		}
			?>

