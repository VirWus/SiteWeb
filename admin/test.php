<?php
include_once("engine/connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");
while ($row = mysqli_fetch_array($query)) {
  $name[] = $row["name"];
}
$res = array($name);
echo json_encode($res);
 ?>
