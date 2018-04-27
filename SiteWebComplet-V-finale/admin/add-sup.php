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
        if (isset($_POST["mod"])) {
        
         $nom=$_POST["nom_module"];
         $niveau=$_POST["niveau"];
         $discription=$_POST["description"];
         if(!empty($nom) && !empty($niveau) && !empty($discription) ) {
        $query = mysqli_query($connect,"INSERT INTO module VALUES(NULL,'1','$nom','$discription','$niveau')");}
        header("location:Support.php");
        } else {

  $directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
  $file =  $directory.basename($_FILES["fileto"]["name"]);
  $nom = base64_encode($_POST["nom"]);
  $resumer = base64_encode($_POST["resumer"]);
  $module = $_POST["module"];
  
  $type=$_POST['type'];
  $pathparts = pathinfo($file);
  $link = base64_encode($_POST["lien"]);
if(!empty($nom) && !empty($resumer) && !empty($type) && !empty($module)  ) {
  if(!empty($link)){
$query = mysqli_query($connect,"INSERT INTO support VALUES(NULL,'$nom','$resumer','$type','$link','$module',0)");
  }else{
    $ext =  $pathparts["extension"];
if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
$file = base64_encode($file);
  $query = mysqli_query($connect,"INSERT INTO support VALUES(NULL,'$nom','$resumer','$type','$file','$module',0)");
}else{
  echo "Your file is not supported";
}
}
}else {
  echo "ERROR ! , try again";
}

  header("location:Support.php");
    }
  }


?>