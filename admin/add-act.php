


<?php 
  $con = mysqli_connect("localhost", "root","","univedu");
	if($con){
   echo "con</br>";
 /* $titre = $_POST["titre"]; 
  $date = $_POST["date"]; 
  $contenu = $_POST["contenu"];*/
  
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["file-input"]["name"]);
$titre = base64_encode($_POST["titre"]);
$contenu = base64_encode($_POST["contenu"]);
$date = $_POST["date"];
$lien = base64_encode($_POST["lien"]);
$pathparts = pathinfo($file);

if(!empty($titre) && !empty($contenu) && !empty($date)  ) {
  if(!empty($lien)){

$query = mysqli_query($connect,"INSERT INTO actuallite VALUES('','$titre','$date','$contenu','$lien')");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["file-input"]["tmp_name"], $file);
  include_once("connect/connection.php");
  $query = mysqli_query($connect,"INSERT INTO actuallite  VALUES('','$titre','$date','$contenu','$lien')");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}


   /*$sql = "INSERT INTO actuallite (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')";
  $ra=mysqli_query($con,"INSERT INTO actuallite(id,titre,date,contenu,lien) VALUES (NULL,'$titre','$date','$contenu','$lien')");
  if($ra){
  echo $titre."</br>";
  echo $date."</br>";
  echo $contenu;}*/
}
?>