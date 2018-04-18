<?php
header('Content-Type: text/html; charset=utf-8');
include_once("connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");

?>
<html>
<head>
  <meta charset="utf-8" />
<script type="text/javascript">
function searchFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("searchBar");
  filter = input.value.toUpperCase();
  table = document.getElementById("resultTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</head>
<body>
<input type="text" name="q"  id="searchBar" placeholder="rechercher les elements ici " onkeyup="searchFunction()"/>
<table id="resultTable" >
  <tr><td>le titre </td> <td> l'année</td> <td> resumer</td> <td>type </td> <td>liens</td> </tr>
  <?php
  while($row = mysqli_fetch_assoc($query)){

  ?>
    <tr><td> <?php echo $row["nom"];  ?> </td> <td> <?php echo $row["annee"];  ?></td> <td> <?php echo base64_decode($row["resumer"]);  ?></td> <td><?php echo $row["type"];  ?></td> <td> <a href=<?php echo "countDownloads.php?q=".$row["lien"];  ?>> telecharger </a> </td> </tr>
<?php } ?>
</table>
</body>
</html>
