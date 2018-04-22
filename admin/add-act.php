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
$titre = base64_encode($_POST["titre"]);
$contenu = base64_encode($_POST["contenu"]);
$date = $_POST["date"];
$lien = base64_encode($_POST["lien"]);

if(!empty($titre) && !empty($contenu) && !empty($date) && !empty($lien) ){
$query = mysqli_query($connect,"INSERT INTO actuallite VALUES(NULL,'$titre','$date','$contenu','$lien')");
}else{
  echo "champ vide";
}
}

header("location:Actualite.php");
?>
