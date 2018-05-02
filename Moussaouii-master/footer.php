<footer id="footer">
    <?php
    $conn=mysqli_connect('localhost','root','','siteweb');
    $result=mysqli_query($conn,'SELECT * FROM admin');
    $row=mysqli_fetch_assoc($result);
    ?>
    <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Moussaoui Boubaker</h4>
		 			<div class="hline-w"></div>
		 			<p> <?php echo $row["bio"]; ?>.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Comptes</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-dribbble"></i></a>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 				<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Contact</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<?php echo $row["adresse"]; ?> , <br/>
		 				<?php echo $row["email"]; ?> .<br/>
                        Phone : <?php echo $row["phone"]; ?><br/>

		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->

  </footer>