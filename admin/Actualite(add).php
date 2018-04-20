<?php

include_once("../engine/connect/connection.php");
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["fileto"]["name"]);
$titre = base64_encode($_POST["titre"]);
$contenu = base64_encode($_POST["contenu"]);
$date = $_POST["date"];
$lien = base64_encode($_POST["lien"]);
$pathparts = pathinfo($file);

if(!empty($titre) && !empty($contenu) && !empty($date)  ) {
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
  include_once("../engine/connect/connection.php");
  $query = mysqli_query($connect,"INSERT INTO actuallite  VALUES (NULL,'$titre','$date','$contenu','$lien')");
}else{
  echo "Your file is not supported";
}

}else {
  echo "ERROR ! , try again";
}

?>
