
<html>
<head>
<title> Ajouter date</title>
</head>
 <body  >
<h3>Ajouter date</h3></div>
<form method ="POST" action="#" >
 <table>
  <tr>
<td>id</td>
<td><input type="text" name="id" maxlength="30" placeholder="Entrer votre titre"/>
</tr>
 <tr>
<td>titre</td>
<td><input type="text" name="titre" maxlength="30" placeholder="Entrer votre titre"/>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date" maxlength="30" placeholder="Entrer votre date"/>
</tr>
 <tr>
<td>contenu</td>
<td><input type="text" name="contenu" maxlength="30" placeholder="Entrer votre contenu"/>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input  type = "submit" value="Ajouter">
</td>
</tr>
</table>
 </form>
</body>
</html>

<?php
//include a script instead of creating each time a mysqli connection
    include_once("engine/connect/connection.php");
    	if($connect){
    

      //$id=$_POST["id"];
      $titre = $_POST["titre"];
      $date = $_POST["date"];
	    $contenu = $_POST["contenu"];

       //$sql = "INSERT INTO actuallite (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')";
      $ra=mysqli_query($con,"INSERT INTO actuallite (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')");
      echo $titre."</br>";
      echo $date."</br>";
      echo $contenu;
    }


?>
