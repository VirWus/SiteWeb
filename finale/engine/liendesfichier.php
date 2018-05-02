<?php
include_once("connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");
while ($row = mysqli_fetch_assoc($query)) {


 ?>
<html >
<head> </head>

  <body>
     <table border="1px black">

      <tr><td> le nom </td> <td> <?php echo $row["nom"]; ?> </td></tr>
<tr><td> l'année </td> <td> <?php echo $row["annee"]; ?> </td></tr>
<tr><td> resumer </td> <td> <?php echo $row["resumer"]; ?> </td></tr>
<tr><td> le type </td> <td> <?php echo $row["type"]; ?> </td></tr>
<tr><td>le lien </td> <td> <?php echo "<a href=". $row["lien"]."> telechareger</a>"; ?> </td></tr>
</table>
</body>
</html>

<?php


} ?>
