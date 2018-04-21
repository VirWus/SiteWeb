<?php
if($_GET){
$id = $_GET['id'];
	include_once("../engine/connect/connection.php");
		$sql = "SELECT * FROM support WHERE id =  ".$id;
			$r=mysqli_query($connect, $sql);

			}
			?>
<?php
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["fileto"]["name"]);
$nom = base64_encode($_POST["nom"]);
$resumer = base64_encode($_POST["resumer"]);
$annee = $_POST["annee"];
$type = $_POST["type"];
$module = base64_encode($_POST["module"]);
$lien = base64_encode($_POST["lien"]);
$pathparts = pathinfo($file);

if(!empty($nom) && !empty($resumer) && !empty($annee) && !empty($type) && !empty($module)  ) {
  if(!empty($lien)){
include_once("../engine/connect/connection.php");
$query = mysqli_query($connect,"UPDATE support set  VALUES(NULL,'$nom','$annee','$resumer','$type','$lien','$module')");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
  include_once("../engine/connect/connection.php");
	$file = base64_encode($file);
  $query = mysqli_query($connect,"UPDATE  support set VALUES(NULL,'$nom','$annee','$resumer','$type','$file','$module')");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}
?>
