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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
	 <!-- portfolio cv template  -->
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	



    <link rel="stylesheet" href="portf/css/linearicons.css">
      <link rel="stylesheet" href="portf/css/font-awesome.min.css">
      <link rel="stylesheet" href="portf/css/bootstrap.css">
      <link rel="stylesheet" href="portf/css/magnific-popup.css">
      <link rel="stylesheet" href="portf/css/nice-select.css">          
      <link rel="stylesheet" href="portf/css/animate.min.css">
      <link rel="stylesheet" href="portf/css/owl.carousel.css">
      <link rel="stylesheet" href="portf/css/main.css">

      <link href="css/mdb.min.css" rel="stylesheet">





<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="cre/css/linearicons.css">
      <link rel="stylesheet" href="cre/css/font-awesome.min.css">
      <link rel="stylesheet" href="cre/css/jquery.DonutWidget.min.css">
      <link rel="stylesheet" href="cre/css/bootstrap.css">
      <link rel="stylesheet" href="cre/css/owl.carousel.css">
      <link rel="stylesheet" href="cre/css/main.css">
 <!-- Actualite Fplus tepmplate  -->
  <link href="fplus/style.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/main.css"> -->


 <!-- engage slider actualite -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!--////////////////////////////////////////////////////-->
   
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="html/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="html/css/util.css">
  <link rel="stylesheet" type="text/css" href="html/css/main.css">
<!--===============================================================================================-->
   <!--//////////////////////////Pato/////////////////////////-->
    
  


  </head>

  <body id="page-top">
    
    <?php
    $resultat = mysqli_query($connect,"SELECT * FROM admin");
    ?> 
    
 <!--   <div id="preloader">
        <div class="fplus-load"></div>
        <img src="img/core-img/h-logo.png" alt="logo">
    </div>  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Moussaoui Boubaker</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
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
            <a class="nav-link js-scroll-trigger" href="#interests">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

<header>
		<div class="container">
			<div class="heading-wrapper">
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
    if($row = mysqli_fetch_assoc($resultat)){ ?>
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="img/profile.jpg" alt=""></div>
						<h2><b><?php echo $row["nom"]."   ".$row["prenom"] ;?></b></h2>
						<h4 class="font-yellow"><?php echo $row["grade"];?></h4>
						<ul class="information margin-tb-30">
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
     
  


<!-- Review -->
  <section class="section-review p-t-115" id="experience">
    <!-- - -->
    <div class="title-review t-center m-b-2">
      <span class="tit2 p-l-15 p-r-15">
        Customers Say
      </span>

      <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
        Review
      </h3>
    </div>

    <!-- - -->
    <div class="wrap-slick3">
      <div class="slick3">
        <div class="item-slick3 item1-slick3">
          <div class="wrap-content-slide3 p-b-50 p-t-50">
            <div class="container">
              <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                <img src="images/avatar-01.jpg" alt="IGM-AVATAR">
              </div>

              <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                <p class="t-center txt12 size15 m-l-r-auto">
                  “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                </p>

                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                </div>

                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                  Marie Simmons ˗ New York
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick3 item2-slick3">
          <div class="wrap-content-slide3 p-b-50 p-t-50">
            <div class="container">
              <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                <img src="images/avatar-04.jpg" alt="IGM-AVATAR">
              </div>

              <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                <p class="t-center txt12 size15 m-l-r-auto">
                  “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                </p>

                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                </div>

                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                  Marie Simmons ˗ New York
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick3 item3-slick3">
          <div class="wrap-content-slide3 p-b-50 p-t-50">
            <div class="container">
              <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                <img src="images/avatar-05.jpg" alt="IGM-AVATAR">
              </div>

              <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                <p class="t-center txt12 size15 m-l-r-auto">
                  “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                </p>

                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                  <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                </div>

                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                  Marie Simmons ˗ New York
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="wrap-slick3-dots m-t-30"></div>
    </div>
  </section>  





<section class="resume-section portfolio-area section-gap" id="education">
    <div class="container">
      <div class="row d-flex justify-content-center">
      <div class="menu-content col-lg-10">
                <div class="title text-center">
                  <h1 class="mb-10">This is what we can do for you</h1>
                  <p>Who are in extremely love with eco friendly system..</p>
                </div>
              </div><!-- col-sm-4 -->
    <div class="col-sm-8 ">

      <div class="filters portfolioFilter clearfix margin-b-80" class="current">
        <div class="col-md-12">
        <div class="col-md-2" >
          <div class="about"  >
            <i class="fa fa-cogs" data-filter=".web-design" id="id_cogs"></i>
            <h3><?php  //echo $row["nom"]; ?></h3>
            <p></p>
            <a href="#">Read more</a>
          </div>
        </div>
            <div class="col-md-2" >
          <div class="about" >
            <i class="fa fa-cogs" data-filter=".branding" id="id_cogs"></i>
            <h3><?php //echo $row["nom"]; ?></h3>
            <p>.</p>
            <a href="#">Read more</a>
          </div>
        </div>
             <!-- <a href="#" data-filter="*" class="current"><b>ALL</b></a>
            <a href="#" data-filter=".web-design"><b>Cours</b></a>
            <a href="#" data-filter=".branding"><b>TD</b></a>
            <a href="#" data-filter=".graphic-design"><b>TP</b></a>
            <a href="#" data-filter=".video"><b>Video</b></a> --> 
      
      </div></div><!-- col-sm-8 -->
    </div><!-- row -->
  
    
    <div class=" filters-content portfolioContainer row grid">
      
  <?php
while($row=mysqli_fetch_assoc($query)){
     ?>

     <div class="col-md-4">
          <div class="about">
            <i class="fa fa-cogs" id="id_"></i>
            <h3><?php echo $row["nom"]; ?></h3>
            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
            <a href="#">Read more</a>
          </div>
        </div>
      
                <?php
}
 ?>

    </div><!-- portfolioContainer -->
      </div><!-- container -->
  </section><!-- portfolio-section -->
  





     
   

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
                                  
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPush">Launch modal</button>

<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Be always up to date</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fa fa-bell fa-4x animated rotateIn mb-4"></i>

                <p>Do you want to receive the push notification about the newest posts?</p>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="https://mdbootstrap.com/product/material-design-for-bootstrap-pro/" class="btn btn-primary ">Yes</a>
                <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalPush-->
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
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>
        </div>
      </section>

      <section class="resume-section fplus-contact-area bg-gray" id="interests">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Contact</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
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

   <!--  <script src="assets/js/jquery-min.js"></script>-->
     <!-- <script src="portf/js/vendor/jquery-2.2.4.min.js"></script> -->
   <script src="common-js/jquery-3.2.1.min.js"></script> 
 <div class="bottom"> <a href="" class="settings"></a> </div>
    <!-- Bootstrap core JavaScript -->



     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

     <!-- engage js slider actualite -->
      <script src="cre/js/main.js"></script>
      <script src="cre/js/jquery.DonutWidget.min.js"></script>
      <script src="cre/js/jquery.magnific-popup.min.js"></script>
      <script src="cre/js/jquery.sticky.js"></script>
      <!-- <script src="cre/js/owl.carousel.min.js"></script>       -->

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
      <script src="fplus/js/google-map/map-active.js"></script>

    <!-- Custom scripts for this template -->
      <script src="js/resume.min.js"></script>
      <script src="assets/js/color-switcher.js"></script>


      <script src="portf/js/isotope.pkgd.min.js"></script>
      <script src="portf/js/main.js"></script>




  <script src="common-js/tether.min.js"></script>

  <script src="common-js/bootstrap.js"></script>

  <!-- <script src="common-js/isotope.pkgd.min.js"></script> -->

  <!-- <script src="common-js/jquery.waypoints.min.js"></script> -->

  <!-- <script src="common-js/progressbar.min.js"></script> -->

  <!-- <script src="common-js/jquery.fluidbox.min.js"></script> -->
   <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="common-js/scripts.js"></script>




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

      $('#bootstrap-data-table-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
        }
    </script>
    <!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="html/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="html/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="html/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/parallax100/parallax100.js"></script>
  <script type="text/javascript">
        $('.parallax100').parallax100();
  </script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
  <script src="html/js/main.js"></script>
 <!--/////////////////pato/////////////////-->
 <script type="text/javascript" src="pato/js/main.js"></script>
  </body>

</html>
