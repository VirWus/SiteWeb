<?php 
$annee=$_POST["annee"];
$titre=$_POST["titre"];

$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT INTO module(module,module_annee) VALUES("'.$titre.'","'.$annee.'" )');
header("location: ../module.php")

?>