<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<?php
	include_once("../engine/connect/connection.php");
if($_POST){
	$id = $_GET['id'];
  $directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
  $file =  $directory.basename($_FILES["fileto"]["name"]);
  $nom = $_POST["titre"];
  $resumer = base64_encode($_POST["description"]);
  $annee=$_POST['date_de_pub'];
  $pathparts = pathinfo($file);
  $link = $_POST["lien"];

  if(!empty($nom) && !empty($resumer) && !empty($annee)   ) {
  if(!empty($link)){
$query = mysqli_query($connect,"UPDATE article set titre='$nom',date_de_pub='$annee',description='$resumer',lien='$link' where id='$id' ");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
$file = base64_encode($file);
$query = mysqli_query($connect,"UPDATE article set titre='$nom',date_de_pub='$annee',description='$resumer',lien='$file' where id='$id' ");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}



		// $sql = "UPDATE support  set nom='$nom',annee='$annee',resumer='$resumer',type='$type' where id='$id'";
		// 	$r=mysqli_query($connect, $sql);
			header("location:article.php");
		}
			?>
