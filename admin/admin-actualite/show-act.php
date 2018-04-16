<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM actuallite where id=".$id;
			$r=mysqli_query($con, $sql);
			  $l = mysqli_fetch_assoc($r);         
			}
			?>
<form method ="POST" action="update-act.php?id=<?php echo$l['id']?>">
 <table>
 <tr>
<td>titre</td>
<td><input type="text" name="titre" value="<?php echo $l['titre'];?>" maxlength="30"/>
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
<td colspan="2" align="center">
<input type = "submit" value="modifier">
</td>
</tr>
</table>

</form>