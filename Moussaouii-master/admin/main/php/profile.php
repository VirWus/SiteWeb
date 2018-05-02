<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date=$_POST["date"];
$lieu=$_POST["lieu"];
$grade=$_POST["grade"];
$secteur=$_POST["secteur"];
$univ=$_POST["univ"];
$bio=$_POST["bio"];
$email=$_POST["email"];
$username=$_POST["username"];
$pass=$_POST["pass"];
$phone=$_POST["phone"];
$adresse=$_POST["adresse"];
$Doctorat=$_POST["Doctorat"];
$Magistere=$_POST["Magistere"];
$ingeniorat=$_POST["ingeniorat"];
$baccalaureat=$_POST["baccalaureat"];

$conn=mysqli_connect('localhost','root','','siteweb');

mysqli_query($conn," UPDATE admin set nom='$nom' , prenom='$prenom' , date='$date' , lieu_de_n='$lieu' , grade='$grade' , secteur='$secteur' , univ='$univ', bio='$bio' , email='$email', username='$username', mdp='$pass' , phone='$phone' , adresse='$adresse' , baccalaureat='$baccalaureat' , ingeniorat='$ingeniorat' , Magistere='$Magistere' , Doctorat='$Doctorat' WHERE id=2 ");


header("location: ../index.php");

?>