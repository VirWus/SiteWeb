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
		include_once("engine/connect/connection.php");
    	if($connect){
			echo "site non connecté";
			}
		$result =mysqli_query($connect, "select * from actuallite");
		while($Rs=mysqli_fetch_assoc($result))
		{
	?>
		<tr>
<td><?php echo $Rs['titre'] ?></td>
<td> <?php echo $Rs['date']?></td>
<td> <?php echo $Rs['contenu']?></td>
<td><a href="update-act.php?id=<?php echo$Rs['id'] ?>">update</a></td>

<br>
<?php echo '</tr>' ?>
</tr>
	<?php
	}
	?>
	</table>
	</div>
</body>

</html>
