<?php

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$date = $_POST["date"];

$directory = "../../../imageact/";
$file =  $directory.basename($_FILES["file"]["name"]);
$pathparts = pathinfo($file);
$ext =  $pathparts["extension"];
$conn = mysqli_connect("localhost","root","","siteweb");

if( ($ext == "jpg") || ($ext == "png") || ($ext == "jpeg") ) {
  move_uploaded_file($_FILES["file"]["tmp_name"], $file);
//echo "<script>document.location='modactualite.php'</script>";
mysqli_query($conn,'INSERT INTO actuallite (titreactua,dateactua,contenuactua,LienImage) VALUES ("'.$titre.'","'.$date.'","'.$contenu.'","'.$file.'")');
header("location: ../actualites.php");
}else{
  //echo "Your file is not supported";
  $file="vide";
	mysqli_query($conn,'INSERT INTO actuallite (titreactua,dateactua,contenuactua,LienImage) VALUES ("'.$titre.'","'.$date.'","'.$contenu.'","'.$file.'")');
	header("location: ../actualites.php");
}
?>
