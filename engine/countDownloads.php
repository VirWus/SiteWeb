<?php
$link = $_GET["q"];
include_once("connect/connection.php");
$query = mysqli_query($connect,"UPDATE support SET count = count + 1  WHERE lien = '$link'");
$li = base64_decode($link);
header('Location:'.$li);


 ?>