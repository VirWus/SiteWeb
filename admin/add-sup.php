
<?php
     include_once("../engine/connect/connection.php");
    	if($connect){

  $directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
  $file =  $directory.basename($_FILES["fileto"]["name"]);
  $nom = $_POST["nom"];
  $resumer = base64_encode($_POST["resumer"]);
  $module = $_POST["module"];
  $annee=$_POST['annee'];
  $type=$_POST['type'];
  $pathparts = pathinfo($file);
  $link = $_POST["lien"];
if(!empty($nom) && !empty($resumer) && !empty($annee) && !empty($type) && !empty($module)  ) {
  if(!empty($link)){

$query = mysqli_query($connect,"INSERT INTO support VALUES('','$nom','$annee','$resumer','$type','$link','$module','')");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);

  $query = mysqli_query($connect,"INSERT INTO support VALUES('','$nom','$annee','$resumer','$type','$file','$module','')");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}

       //$sql = "INSERT INTO actuallite (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')";
      // $ra=mysqli_query($connect,"INSERT INTO support (id,nom,annee,resumer,type,lien) VALUES ('','$nom','$annee','$resumer','$type','$lien')");
   header("location:Support.php");
    }


?>
