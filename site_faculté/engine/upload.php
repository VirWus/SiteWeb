<?php
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["fileto"]["name"]);
$nom = base64_encode($_POST["nom"]);
$resumer = base64_encode($_POST["resumer"]);
$annee = $_POST["annee"];
$type = $_POST["type"];
$module = base64_encode($_POST["module"]);
$link = base64_encode($_POST["link"]);
$pathparts = pathinfo($file);

if(!empty($nom) && !empty($resumer) && !empty($annee) && !empty($type) && !empty($module)  ) {
  if(!empty($link)){
include_once("connect/connection.php");
$query = mysqli_query($connect,"INSERT INTO support VALUES('','$nom','$module','$annee','$resumer','$type','$link')");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
  include_once("connect/connection.php");
  $query = mysqli_query($connect,"INSERT INTO support VALUES('','$nom','$module','$annee','$resumer','$type','$file')");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}
?>
