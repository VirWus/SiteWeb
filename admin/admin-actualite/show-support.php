<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM support where id=".$id;
			$r=mysqli_query($con, $sql);
			  $l = mysqli_fetch_assoc($r);         
			}
			?>
<form method ="POST" action="update-support.php?id=<?php echo$l['id']?>">
 <table>
 <tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?php echo $l['nom'];?>" maxlength="30"/>
</tr>
 <tr>
<td>annee</td>
<td><input type="text" name="annee" value="<?php echo $l['annee']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>resumer</td>
<td><input type="text" name="resumer" value="<?php echo $l['resumer']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?php echo $l['type']  ;  ?>" maxlength="30"/>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type = "submit" value="modifier">
</td>
</tr>
</table>

</form>
