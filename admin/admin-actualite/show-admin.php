<?php
if($_GET){
$id = $_GET['id'];
		$con = mysqli_connect("localhost", "root", "", "univedu2");
		$sql = "SELECT * FROM admin where id=".$id;
			$r=mysqli_query($con, $sql);
			  $l = mysqli_fetch_assoc($r);         
			}
			?>
<form method ="POST" action="update-admin.php?id=<?php echo$l['id']?>">
 <table>
 <tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?php echo $l['nom'];?>" maxlength="30"/>
</tr>
 <tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?php echo $l['prenom']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date" value="<?php echo $l['date']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>lieu de naiss</td>
<td><input type="text" name="lieu_de_n" value="<?php echo $l['lieu_de_n']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>secteur</td>
<td><input type="text" name="secteur" value="<?php echo $l['secteur']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>universite</td>
<td><input type="text" name="univ" value="<?php echo $l['univ']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>grade</td>
<td><input type="text" name="grade" value="<?php echo $l['grade']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?php echo $l['email']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>username</td>
<td><input type="text" name="username" value="<?php echo $l['username']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>mdp</td>
<td><input type="text" name="mdp" value="<?php echo $l['mdp']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td>bio</td>
<td><input type="text" name="bio" value="<?php echo $l['bio']  ;  ?>" maxlength="30"/>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type = "submit" value="modifier">
</td>
</tr>
</table>

</form>