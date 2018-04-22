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
   <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  -->

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
	 <!-- portfolio cv template  -->
	<link href="CSSNew/bootstrap.css" rel="stylesheet">



    <link rel="stylesheet" href="portf/css/linearicons.css">
      <link rel="stylesheet" href="portf/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="portf/css/bootstrap.css"> -->
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
      <!-- <link rel="stylesheet" href="cre/css/bootstrap.css"> -->
      <link rel="stylesheet" href="cre/css/owl.carousel.css">
      <link rel="stylesheet" href="cre/css/main.css">
 <!-- Actualite Fplus tepmplate  -->
  <link href="fplus/style.css" rel="stylesheet">

  <link rel="stylesheet" href="css/main.css">


 <!-- engage slider actualite -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!--////////////////////////////////////////////////////-->

  <!--===============================================================================================-->
  <link rel="shortcut icon" href="img/favicopn.png">
  <!--===============================================================================================-->
  <!-- <link rel="stylesheet" type="text/css" href="html/vendor/bootstrap/css/bootstrap.min.css"> -->
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
    $actu=mysqli_query($connect,"SELECT * FROM actuallite");
    $module = mysqli_query($connect,"SELECT DISTINCT module FROM support");
    ?>

 <!--   <div id="preloader">
        <div class="fplus-load"></div>
        <img src="img/core-img/h-logo.png" alt="logo">
    </div>  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Moussaoui Boubaker</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="html/images/icons/favicopn.png" alt="">
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


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- Actualite -->
  <section class="section-event" id="experience">
    <div class="wrap-slick2">
      <div class="slick2">
      	      	       	               <?php
    while($k = mysqli_fetch_assoc($actu)){ ?>
        <div class="item-slick2 item1-slick2" style="background-image: url(html/images/event4-02.jpg); background-size: cover; /*background-attachment: fixed;*/ background-position: center;">

          <div class="wrap-content-slide2 p-t-115 p-b-208">
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
                <a href="#" class="wrap-pic-blo2 bg1-blo2" style="background-image: url(html/images/evento-02.jpg);">
                  <div class="time-event size10 txt6 effect1">
                    <span class="txt-effect1 flex-c-m t-center" id="btn_send">
                     <?php echo $k["date"]; ?>
                    </span>
                  </div>
                </a>

                <!-- Text block2 -->
                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                  <h4 class="tit7 t-center m-b-10">
                    <?php echo $k["titre"]; ?>
                  </h4>

                  <p class="t-center">
                    <?php echo $k["contenu"]; ?>
                  </p>

                  <div class="flex-sa-m flex-w w-full m-t-40">
                    <div class="size11 flex-col-c-m">
                      <span class="dis-block t-center txt7 m-b-2 days">
                        00
                      </span>

                      <span class="dis-block t-center txt8">
                        Days
                      </span>
                    </div>

                    <div class="size11 flex-col-c-m">
                      <span class="dis-block t-center txt7 m-b-2 hours">
                       05
                      </span>

                      <span class="dis-block t-center txt8">
                        Hours
                      </span>
                    </div>

                    <div class="size11 flex-col-c-m">
                      <span class="dis-block t-center txt7 m-b-2 minutes">
                        00
                      </span>

                      <span class="dis-block t-center txt8">
                        Minutes
                      </span>
                    </div>

                    <div class="size11 flex-col-c-m">
                      <span class="dis-block t-center txt7 m-b-2 seconds">
                        50
                      </span>

                      <span class="dis-block t-center txt8">
                        Seconds
                      </span>
                    </div>
                  </div>

                  <a href="<?php echo $k["lien"] ;?>" class="txt4 m-t-40">
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
      switch ($i["module"]) {
        case '1':
        $nomDuModule = "POO";
          break;
        case '2':
        $nomDuModule = "BDD";
          break;
          case '3':
            $nomDuModule = "RS";
            break;
        default:
        echo "error";
          break;

      }
    ?>

     <div class="col-md-4">
          <div class="about">
            <i class="fa fa-cogs" id=""></i>
            <h3><?php echo $nomDuModule ?></h3>
            <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
            <a href="#education" data-toggle="modal" data-target="#modalCart<?php echo $i["module"]; ?>">Read more</a>
          </div>



</div>


<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart<?php echo $i["module"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $nomDuModule; ?>"</h4>
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
$var = $i["module"];
$supo=mysqli_query($connect,"SELECT * FROM support WHERE module = '$var'");
while($row2 = mysqli_fetch_assoc($supo))
{

?>

                      <tr>
                        <td id="target"><?php echo base64_decode($row2["nom"]); ?>  </td>
                        <td><?php echo $row2["annee"]; ?></td>
                        <td><?php echo base64_decode($row2["resumer"]); ?></td>
                        <?php $liendetelechargment = base64_decode($row2['lien']); $liendetelechargment = substr($liendetelechargment,3); ?>
                         <td> <a href="engine/countDownloads.php?q=<?php echo $liendetelechargment; ?>"
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
        	  	<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: black;">
                  Recherches Scientifique
                </h3>
                <span class="tit2 p-l-15 p-r-15" id="MSactu">
                  Skills
                </span>

           		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 center" id="MSactu">Towards enhanced reactive routing in urban Vehicular Ad hoc Networks</h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt11 size27 m-l-r-auto" style="color: white ;">
									“ In this paper, we investigate the efficiency of the reactive routing approach in Vehicular Ad
Hoc Networks (VANETs) with main focus on reducing the incurred overhead by control
packets used for routes establishment. In AODV, for example, the excessive number of
RREQs broadcasted in the network, to respond to the rapid change in network topology,
usually hinders the fast transmission of some important packets carrying critical information.
Moreover, it may also lead to severe congestion situations causing the loss of some packets,
and thus reducing the QoS of the corresponding applications. To face this problem, we
propose a simple yet efficient solution in which each vehicle appends the geographical
location of the destination to each generated RREQ packet. Thereby, this latter packet will
be rebroadcasted only by the receiver vehicles located at this region or heading towards … ”
								</p>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://www.researchgate.net/profile/Soufiene_Djahel/publication/280317385_Towards_Enhanced_Reactive_Routing_in_Urban_Vehicular_Ad_hoc_Networks/links/55b24f4908aec0e5f4317a43/Towards-Enhanced-Reactive-Routing-in-Urban-Vehicular-Ad-hoc-Networks.pdf" class="btn btn-outline-light">Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 text-center" id="MSactu">A cross layer approach for efficient multimedia data dissemination in VANETs</h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt11 size27 m-l-r-auto" style="color: white ;">
									“ The recent rapid expansion of multimedia applications spectrum, ranging from infotainment
to healthcare and mission-critical scenarios, has incited researchers from different
disciplines to develop various tools and protocols to support such applications. Many people
use multimedia data while they travel in different transportation means and thus they need
various QoS levels based on the type of application they are running. Such data is usually
transmitted through 3G/LTE networks; however, the unprecedented increase of multimedia
data volume makes satisfying their requirements in terms of low delay and higher bandwidth
a challenge. Many experts foresee that Vehicular Ad-hoc Networks (VANETs) technology
can be an efficient offloading solution for 3G/LTE networks by providing cost-free and robust
data exchange between cars as well as among their passengers. Although VANETs pave … ”
								</p>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://www.sciencedirect.com/science/article/pii/S221420961730030X" class="btn btn-outline-light" >Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

		        	<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14  wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 text-center" id="MSactu">A cross layer approach for efficient multimedia data dissemination in VANETs</h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt11 size27 m-l-r-auto" style="color: white ;">
									“ The recent rapid expansion of multimedia applications spectrum, ranging from infotainment
to healthcare and mission-critical scenarios, has incited researchers from different
disciplines to develop various tools and protocols to support such applications. Many people
use multimedia data while they travel in different transportation means and thus they need
various QoS levels based on the type of application they are running. Such data is usually
transmitted through 3G/LTE networks; however, the unprecedented increase of multimedia
data volume makes satisfying their requirements in terms of low delay and higher bandwidth
a challenge. Many experts foresee that Vehicular Ad-hoc Networks (VANETs) technology
can be an efficient offloading solution for 3G/LTE networks by providing cost-free and robust
data exchange between cars as well as among their passengers. Although VANETs pave … ”
								</p>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://www.sciencedirect.com/science/article/pii/S221420961730030X" class="btn btn-outline-light" >Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				  	<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14  wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 text-center" id="MSactu">Unicast routing on VANETs</h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt11 size27 m-l-r-auto" style="color: white ;">
									“ Greedy routing in VANETs requires some geographical informations, such as the source
location and the destination location. The first one could be obtained using some
localization devices like GPS receiver. However, the second one is provided by a location
service. This later has a high overhead especially if it is implemented over V2V (vehicle to
vehicle) communications. Many location services are well known as HLS, RLS, GLS. This
paper is interested in reducing this overhead by using some Road Side Units (RSU) already
deployed along the roads. We propose here a location service called" improved Reactive
Location Service (iRLS)", which is an extension of the RLS service. The major difference is
that RLS assumes only V2V communications and iRLS takes profit of a wireless backbone
based on RSUs to catch the destination's position. This allows to reduce the overhead … ”
								</p>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://pdfs.semanticscholar.org/35fd/89819fe29b66ca248f63f4045f3fea9ac4f0.pdf" class="btn btn-outline-light">Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14  wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="img/discovery-icon.png" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<h3 class="tit2 p-l-15 p-b-15 text-center" id="MSactu">Routing over VANET in Urban Environments</h3>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
										<p class="t-center txt11 size27 m-l-r-auto" style="color: white ;">
									“ Abstract Experimental deployment of Cooperative Intelligent Transport Systems have been
undertaken these last years. But a real deployment is lower than expected. One of the main
reasons is the high cost of investments of Road Side Units on roads. Road operators need a
lot of money in order to achieve this deployment. We suggest to reduce this investment by
the deployment In this paper, we propose a combination of GPSR (Greedy Perimeter
Stateless Routing) and an extension of Reactive Location Service denoted eRLS. They used
to be combined, ie GPRS takes care of routing packets from a source to a destination and
eRLS is called to get the destination position when the target node position is unknown or is
not fresh enough. When a destination is not in the area of the sender, the exact position of
the target is first looked for. An extra overhead is generated from the sender to the …”
								</p>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									<a href="https://link.springer.com/chapter/10.1007/978-3-319-49466-1_10" class="btn btn-outline-light">Télecharger</a>
								</div>
							</div>
						</div>
					</div>
				</div>

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

      <section class="resume-section fplus-contact-area bg-gray" id="interests">
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
                            <form action="http://scripte.oil-station.com/engine/contact.php" method="POST" id="main_contact_form" >
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
                                            <input type="submit" name="submit" id="btn_send" class="btn" value="Send Message">
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
             'excel', 'pdf', 'print'
         ]
     });
        }
    </script>


<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="html/vendor/bootstrap/js/popper.js"></script>
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
 <!-- <script type="text/javascript" src="pato/js/main.js"></script> -->
  </body>

</html>
