<?php
if($_GET){
$id = $_GET['id'];
include_once("engine/connect/connection.php");
		$sql = "SELECT * FROM actuallite WHERE id =  ".$id;
			$r=mysqli_query($con, $sql);
			$l = mysqli_fetch_array($r);
			}
			?>
<?php
if($_POST){
$titre=$_POST['titre'];
$date=$_POST['date'];
$contenu=$_POST['contenu'];

		$sql = "UPDATE actuallite  set titre='$titre',date='$date',contenu='$contenu' WHERE id='$id'";
			$r=mysqli_query($connect, $sql);
			$l = mysqli_fetch_array($r);
			header("location: show-act.php");
		}
			?>
<form method ="POST" action="#">
 <table>
 <tr>
<td>titre</td>
<td><input type="text" name="titre" value="<?php echo $l['titre']  ;  ?>" maxlength="30"/>
</tr>
 <tr>
<td>date</td>
<td><input type="text" name="date" value="<?php echo $l['date']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>contenu</td>
<td><input type="text" name="contenu" value="<?php echo $l['contenu']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type = "submit" value="modifier">
</td>
</tr>
</table>

</form>
