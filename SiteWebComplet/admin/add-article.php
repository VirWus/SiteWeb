<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<?php
     include_once("connect/connection.php");
    	if($connect){
  $directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
  $file =  $directory.basename($_FILES["fileto"]["name"]);
  $nom = base64_encode($_POST["titre"]);
  $resumer = base64_encode($_POST["description"]);
  $annee=$_POST['date_de_pub'];
  $pathparts = pathinfo($file);
  $link = base64_encode($_POST["lien"]);
if(!empty($nom) && !empty($resumer) && !empty($annee)   ) {
  if(!empty($link)){
$query = mysqli_query($connect,"INSERT INTO article VALUES(NULL,'1','$nom','$annee','$resumer','$link')");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
$file = base64_encode($file);
$query = mysqli_query($connect,"INSERT INTO article VALUES(NULL,'1','$nom','$annee','$resumer','$file')");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}

 // header("location:Support.php");
    }


?>
