<?php
include_once("../engine/connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");

while ($row = mysqli_fetch_array($query)) {
  $rows[] = array(
              'nom'=> $row[ 'nom' ],
              'module' => $row['module'],
              'annee' => $row[ 'annee' ],
              'resumer' => $row['resumer'],
              'type' => $row['type'],
              'lien' => $row['lien'],
          );




}
echo json_encode(array_values($rows));


 ?>
