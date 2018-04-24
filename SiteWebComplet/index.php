<?php
include_once("engine/connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moussaoui Boubaker</title>
    
    <link rel="shortcut icon" href="img/favicopn.png">
   
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="assets/asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/asset/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/asset/resume.css" rel="stylesheet">
	 <!-- portfolio cv template  -->
	  <link href="assets/asset/bootstrap.css" rel="stylesheet">
    <link href="assets/asset/mdb.min.css" rel="stylesheet">

 <!-- Actualite Fplus tepmplate  -->
    <link href="assets/asset/fplus/style.css" rel="stylesheet">
 <!-- engage slider actualite -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/asset/html/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/asset/html/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/asset/html/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/asset/html/css/main.css">

  </head>

  <body id="page-top">

    <?php
      $resultat = mysqli_query($connect,"SELECT * FROM admin");
    $actu=mysqli_query($connect,"SELECT * FROM actuallite");
    
    $article = mysqli_query($connect,"SELECT * FROM article");
    ?>

 <!--   <div id="preloader">
        <div class="fplus-load"></div>
        <img src="img/core-img/h-logo.png" alt="logo">
    </div>  -->

    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Moussaoui Boubaker</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/favicopn.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Actualite</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Recheche Sientifique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

<header>
		<div class="container">
			<div class="heading-wrapper animated slideInDown">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i style="color: white;" class="icon ion-ios fa fa-phone"></i>
							<div class="right-area">
								<h6 style="font-size: 16px;font-weight:700 ; color: white;"></h6>
                <p style="font-size: 16px; font-weight:700 ; color: white;">+213.7.74.59.49.81</p>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i style="color: white;" class="icon ion-ios fa fa-university"></i>
							<div class="right-area">
								<h6 style="font-size: 16px;font-weight:700 ; color: white;">Université Bachir El Ibrahimi,BBA</h6>
                <p style="font-size: 16px; font-weight:700 ; color: white;"></p>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i style="color: white;" class="icon ion-ios fa fa-envelope"></i>
							<div class="right-area">
								<h6 style="font-size: 16px; font-weight:700 ; color: white;"></h6>
                <p style="font-size: 16px; font-weight:700 ; color: white;">b.moussaoui@univ-bba.dz</p>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->


		</div><!-- container -->
	</header>

	<section class="intro-section" id="about">
    <?php
    if($row = mysqli_fetch_assoc($resultat)){ 
      $id = $row["id"];
       $module = mysqli_query($connect,"SELECT * FROM module WHERE id_admin='$id'");
      ?>
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro animated fadeIn">
					<?php 
            $image= base64_decode($row["image"]);
            $image=substr($image,3);?>
						<div class="profile-img animated zoomIn"><img src="<?php echo $image ;?>" alt=""></div>
						<h2><b><?php echo $row["nom"]."   ".$row["prenom"] ;?></b></h2>
						<h4 class="font-yellow"><?php echo $row["grade"];?></h4>
						<ul class="information ">
							<li><b>BORN : </b><?php echo $row["date"];?></li>
							<li><b>EMAIL : </b><?php echo $row["email"];?></li>
							<li><b>MARITAL STATUS : </b>Married</li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://www.linkedin.com/in/boubakeur-moussaoui-30192218/"><i style="color: white;" class="ion fa fa-linkedin"></i></a></li>
							<li><a href="https://www.facebook.com/boubakeur.moussaoui?ref=br_tf"><i style="color: white;" class="ion fa fa-facebook"></i></a></li>

						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
    <?php } ?>
	</section><!-- intro-section -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- Actualite -->
  <section class="section-event" id="experience">
    <div class="wrap-slick2">
      <div class="slick2">
      	      	       	               <?php
    while($k = mysqli_fetch_assoc($actu)){ ?>
        <div class="item-slick2 item1-slick2" style="background-image: url(img/event4-02.jpg); background-size: cover; /*background-attachment: fixed;*/ background-position: center;">

          <div class="wrap-content-slide2 p-t-70 p-b-208">
            <div class="container">

              <div class="title-event t-center m-b-52">
              	<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: black;">
                  Actualité
                </h3>
                <span class="tit2 p-l-15 p-r-15" id="MSactu">
                  Moussaoui Boubakeur
                </span>


              </div>

              <!-- Block2 -->
              <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
                <!-- Pic block2 -->
                <a href="#" class="wrap-pic-blo2 bg1-blo2" style="background-image: url(img/evento-02.jpg);">
                  <div class="time-event size10 txt6 effect1">
                    <span class="txt-effect1 flex-c-m t-center" id="btn_send">
                     <?php echo $k["date"]; ?>
                    </span>
                  </div>
                </a>

                <!-- Text block2 -->
                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                  <span class="tit2 p-l-15 p-r-15" id="MSactu">
                    <?php echo base64_decode($k["titre"]); ?>
                  </span>

                  <p class="t-center">
                    <?php echo base64_decode($k["contenu"]); ?>
                  </p>



                  <a href="<?php echo base64_decode($k["lien"]) ;?>" class="txt4 m-t-40">
                    View Details
                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                  </a>
                </div>
              </div>

            </div>
          </div>

        </div>
<?php } ?>

      </div>

      <div class="wrap-slick2-dots"></div>
    </div>
  </section>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
<section class="resume-section portfolio-area section-gap" id="education">
    <div class="container">
      <div class="row d-flex justify-content-center">
      <div class="menu-content col-lg-10">
                 <div class="title-event t-center m-b-52">

                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: black;">
                   Education
                </h3>

                <span class="tit2 p-l-15 p-r-15" id="MSactu">
                 Des fichies a telecharger
                </span>


              </div>
              </div>

      </div><!-- row -->

<div class="col-sm-12 row grid">

               <?php
   while($i = mysqli_fetch_assoc($module)){
    
    
    ?>

     <div class="col-md-4 animated bounce " >
          <div class="about">
            <i class="fa fa-cogs" id=""></i>
            <h3><?php echo $i["nom_module"]; ?></h3>
            <p><?php echo $i["description"]; ?></p>
            <a href="#education" data-toggle="modal" data-target="#modalCart<?php echo $i["id"]; ?>">Telechargement</a>
          </div>



</div>


<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart<?php echo $i["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $i["nom_module"]; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">



                        <div class="card-body">
                  <table id="" class="table table-hover">
                    <thead>
                      <tr>
                        <th>nom</th>
                        <th>année</th>
                        <th>resumer</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
$var = $i["id"];
$supo=mysqli_query($connect,"SELECT * FROM support WHERE module = '$var'");
while($row2 = mysqli_fetch_assoc($supo))
{

?>

                      <tr>
                        <td id="target"><?php echo base64_decode($row2["nom"]); ?>  </td>
                        <td><?php echo $row2["annee"]; ?></td>
                        <td><?php echo base64_decode($row2["resumer"]); ?></td>
                         <?php $liendetelechargment = base64_decode($row2['lien']); $liendetelechargment = substr($liendetelechargment,3); ?>
                         <td> <a href="<?php echo $liendetelechargment; ?>"
    download="<?php echo base64_decode($row2["nom"]); ?>"> <div class="btn btn-outline-primary fa fa-download"> </div></a> <div class="btn btn-outline-primary fa fa-play"> </div></td>
                      </tr>
                      <?php
}
                      ?>
                    </tbody>
                  </table>
                        </div>



            </div>
            <!--Footer-->
            <div class="modal-footer">
                 <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal: modalCart -->
 <?php
}
                      ?>
                        </div>
</div>
    </div><!-- portfolioContainer -->



      </div><!-- container -->


  </section><!-- portfolio-section -->


<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<!--
<section class="resume-section portfolio-area section-gap" id="education">
   <div class="container">
     <div class="row d-flex justify-content-center">

           <div class="menu-content col-lg-10">
               <div class="title text-center">
                 <h1 class="mb-10">This is what we can do for you</h1>
                 <p>Who are in extremely love with eco friendly system..</p>
               </div>
             </div>

   <div class="col-sm-12 row grid ">


       <a href="#" data-filter=".branding">

         <div class="about col-sm-4"  >
           <i class="fa fa-cogs" data-filter=".web-design" id="id_cogs"></i>
           <h3><?php  //echo $row["nom"]; ?></h3>
           <p></p>
           <a href="#"  class="current">Read more</a>
         </div>

       </a>
       <a href="#" data-filter="*">

         <div class="about col-sm-4" >
           <i class="fa fa-cogs"  id="id_cogs"></i>
           <h3><?php //echo $row["nom"]; ?></h3>
           <p>.</p>
           <a href="#" >Read more</a>

         </div>
       </a>
            <!-- <a href="#" data-filter="*" class="current"><b>ALL</b></a>
           <a href="#" data-filter=".web-design"><b>Cours</b></a>
           <a href="#" data-filter=".branding"><b>TD</b></a>
           <a href="#" data-filter=".graphic-design"><b>TP</b></a>
           <a href="#" data-filter=".video"><b>Video</b></a> -->
<!--       </div> -->
    <!-- col-sm-8 -->
   <!-- </div><!-- -->


  <!--  <div class=" filters-content portfolioContainer row grid">
 <?php
//while($row=mysqli_fetch_assoc($query)){
    ?>

    <div class="col-md-4 branding">
         <div class="about">
           <i class="fa fa-cogs" id="id_"></i>
           <h3><?php //echo $row["nom"]; ?></h3>
           <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
           <a href="#">Read more</a>
         </div>
       </div>
      -->
<!--                <?php
//}
?> -->

   <!-- </div><!-- portfolioContainer -->
     <!--</div><!-- container -->
 <!--</section> --><!-- portfolio-section -->

<!-- ////////////////////////////////////////////////////////////////////////////// -->







      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills" style="background-image: url(img/apple-computer-desk-374857.jpg); background-size: cover; /*background-attachment: fixed;*/ background-position: center;">
        <div class="my-auto">
        	  <div class="title-event t-center m-b-52">
        	  	<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: white;">
                  Recherches Scientifique
                </h3>
                <span class="tit2 p-l-15 p-r-15" id="MSactu">
                  Skills
                </span>

   
		<div class="wrap-slick3">
			<div class="slick3"> 
        <?php
    while($row = mysqli_fetch_assoc($article)){ ?>
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 center" id="MSactu"> <?php echo base64_decode($row["titre"]) ; ?></h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt12 size15 m-l-r-auto" style="color: white ;">
									“ <?php echo base64_decode($row["description"]) ?> ...”
								</p>
								</div>
                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                    <p class="t-center txt11 size15 m-l-r-auto" style="color: white ;">
                  Date De Publication : <?php echo $row["date_de_pub"]; ?>
                </p>
                </div>
								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://www.researchgate.net/profile/Soufiene_Djahel/publication/280317385_Towards_Enhanced_Reactive_Routing_in_Urban_Vehicular_Ad_hoc_Networks/links/55b24f4908aec0e5f4317a43/Towards-Enhanced-Reactive-Routing-in-Urban-Vehicular-Ad-hoc-Networks.pdf" class="btn btn-outline-light">Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php
    } ?>

		        

			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
              </div>

          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <!-- <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li> -->
            <li class="list-inline-item">
              <i class="devicons devicons-mysql"></i>
            </li>
           <!--  <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li> -->
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
           <!--  <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li> -->
          </ul>

      </section>

      <section class="resume-section fplus-contact-area " id="contact">
       <div class="container">

                 <div class="title-event t-center m-b-52">
                 	<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: black;">
                  Contacts
                </h3>
                <span class="tit2 p-l-15 p-r-15">
                  Contact
                </span>


              </div>

        </div>

        <div class="fplus-contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="contact_from wow fadeInDown" data-wow-delay="1.5s">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="number" id="number" placeholder="Telephone" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 text-center">
                                            <button type="submit" id="btn_send" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps -->
        <div id="googleMap" class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"></div>
      </section>




    </div>





  <script src="assets/asset/common-js/jquery-3.2.1.min.js"></script>
  <!-- <div class="bottom"> <a href="" class="settings"></a> </div> -->
  <!-- Bootstrap core JavaScript -->

  <!-- Plugin JavaScript -->
  <script src="assets/asset/vendor/jquery-easing/jquery.easing.min.js"></script>
     <!-- engage js slider actualite -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
  <script src="assets/asset/fplus/js/google-map/map-active.js"></script>

    <!-- Custom scripts for this template -->
  <script src="assets/asset/js/resume.min.js"></script>
  <script src="assets/js/color-switcher.js"></script>

  <script src="assets/asset/portf/js/isotope.pkgd.min.js"></script>
  <script src="assets/asset/portf/js/main.js"></script>

  <script src="assets/asset/common-js/tether.min.js"></script>
  <script src="assets/asset/common-js/bootstrap.js"></script>

  <script type="text/javascript" src="assets/asset/mdb.min.js"></script>
  <script src="assets/asset/common-js/scripts.js"></script>

  <script type="text/javascript" src="assets/asset/html/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="assets/asset/html/js/slick-custom.js"></script>
  <script src="assets/asset/html/js/main.js"></script>


 <script src="admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="admin/assets/js/lib/data-table/datatables-init.js"></script>

<script type="text/javascript">
  
  // -------   Mail Send ajax

     $(document).ready(function() {
        var form = $('#main_contact_form'); // contact form
        var submit = $('.btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'scripte.oil-station.com/engine/contact.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function(data) {
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });
    });
</script>

  </body>

</html>
