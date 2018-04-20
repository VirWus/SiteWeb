


<?php 
  include_once("../engine/connect/connection.php");
	if($connect){
$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$date = $_POST["date"];
$lien = $_POST["lien"];

if(!empty($titre) && !empty($contenu) && !empty($date) && !empty($lien) ){
$query = mysqli_query($connect,"INSERT INTO actuallite VALUES('','$titre','$date','$contenu','$lien')");
}else{
  echo "champ vide";
}
}

header("location:Actualite.php");
?>