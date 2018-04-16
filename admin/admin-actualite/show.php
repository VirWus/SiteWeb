<html>
<head></head>
<body>
	<style type="text/css">
	table,tr,th,td{
		border: 0.2em solid;
		text-align: left;
	}
	</style>
<table>
<tr>
<th>Titre</th>
<th>date</th>
<th>contenu</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "univedu2");
			if(!$con){
			echo "site non connecté";
			}
		$result =mysqli_query($con, "select * from actuallite");
		while($Rs=mysqli_fetch_assoc($result))
		{   
	?>
		<tr>
<td><?php echo $Rs['titre'] ?></td>
<td> <?php echo $Rs['date']?></td>
<td> <?php echo $Rs['contenu']?></td>
<td><a href="show-act.php?id=<?php echo$Rs['id'] ?>">update</a></td>

<br>
<?php echo '</tr>' ?> 
</tr>
	<?php
	}
	?>
	</table>
	</div>
	<?php
		$con = mysqli_connect("localhost", "root", "", "univedu2");
			if(!$con){
			echo "site non connecté";
			}
		$res=mysqli_query($con, "select * from admin");
		if($r=mysqli_fetch_assoc($res))
		{   
	?>
	<a href="show-admin.php?id=<?php echo$r['id']?>">update profil</a>

	<?php
	}
	?>
	<table>
<tr>
<th>nom</th>
<th>annee</th>
<th>resumer</th>
<th>type</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "univedu2");
			if(!$con){
			echo "site non connecté";
			}
		$result =mysqli_query($con, "select * from support");
		while($Rs=mysqli_fetch_assoc($result))
		{   
	?>
		<tr>
<td><?php echo $Rs['nom'] ?></td>
<td> <?php echo $Rs['annee']?></td>
<td> <?php echo $Rs['resumer']?></td>
<td> <?php echo $Rs['type']?></td>

<td><a href="show-support.php?id=<?php echo$Rs['id'] ?>">update</a></td>

<br>
<?php echo '</tr>' ?> 
</tr>
	<?php
	}
	?>
	</table>
</body>

</html>