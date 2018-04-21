<?php
$link = $_GET["q"];
include_once("connect/connection.php");
$link = base64_encode("../".$link);

$query = mysqli_query($connect,"UPDATE support SET count = count + 1  WHERE lien = '$link'");
$li = base64_decode($link);
$li =  substr($li,3);
header("Location:http://localhost/SiteWeb/$li");


 ?>
