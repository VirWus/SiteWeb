<?php 
$nom=$_POST["nom"];
$annee=$_POST["annee"];
$resumer=$_POST["resumer"];
$type=$_POST["type"];
$lien=$_POST["lien"];
$conn = mysqli_connect('localhost','root','','univedu'); 
mysqli_query ($conn,'SELECT * FROM support WHERE (nom,annee,resumer,type,lien) value("'.$nom.'","'.$annee.'","'.$resumer.'","'$type'","'.$lien.'")');
 ?>