<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="Utf8_generale_ci">
  <title>Articles</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>
  <?php
    include_once("header.php");
    ?>

    <!--==========================
      Featured Services Section
    ============================-->
    <!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3> Articles </h3>
          <p>MOUSSAOUI Boubakeur<br/>
        Universite Bordj Bou Arreridj<br/>
    </p>
        </header>
         
        <div class="row">
<?php
   
                $conn = mysqli_connect('localhost', 'root', '', 'siteweb');
                    $result = mysqli_query($conn, 'SELECT * FROM article' );
           
                if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
          <div class="col-lg-12 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a href= "<?php echo $row['lienart'];?>"><?php echo $row['titreart'];?></a> </h4>
                 <p class="description"><?php echo $row['resumeart']; ?></p>
                 
                  
                  </div>
                  <?php
                    
        }
        }
                  ?>
            
          

        </div>

      </div>
        <div class="skills-content">


      </div>
    </section>

    <?php
    include_once("footer.php");
    ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
