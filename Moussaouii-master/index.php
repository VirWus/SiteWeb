<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="Utf8_generale_ci">
  <title>Moussaoui Boubaker</title>
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
</head>
<body>
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Moussaoui Boubakeur</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#action">Articles</a></li>
          <li><a href="#call-to-action">Documents</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators"></ol>
          <div class="carousel-inner" role="listbox">
     <?php $con = mysqli_connect("localhost", "root", "", "siteweb");
     $sql = "SELECT * FROM actuallite";
     $result = mysqli_query($con, $sql);$i=1;
     while($row = mysqli_fetch_assoc($result)){?>
          <div class="carousel-item <?php if ($i==1) {echo "active";}?>">
            <div class="carousel-background"><img src="<?php echo substr($row["LienImage"],9) ; ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo $row["titreactua"]; ?></h2>
                    <p><?php echo $row["contenuactua"]; ?></p>
                <!--a href="#featured-services" class="btn-get-started scrollto">Get Started</a-->
              </div>
            </div>
         </div>
            <?php $i=$i+1; } ?>
      </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section><!-- #intro -->
  <main id="main">
    <!--==========================
      Featured Services Section
    ============================-->
     <?php
      $conn = mysqli_connect('localhost', 'root', '', 'siteweb');
    ?>
    <section id="featured-services">
      <div class="container">
        <div class="row">
        <?php
                $resul = mysqli_query($conn, 'SELECT DISTINCT module_annee FROM module' );
          while ($ro= mysqli_fetch_assoc($resul)){?>
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="documents.php?an=<?php echo $ro["module_annee"]; ?>"><?php echo $ro["module_annee"]; ?></a></h4>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- #featured-services -->
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>À propos</h3>
        </header>
         <?php
                    $result = mysqli_query($conn, 'SELECT * FROM admin' );
           $row= mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)>0){

                    ?>

        <div class="row about-cols">
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">Information Generale </h2>
              <p>
            MOUSSAOUI Boubakeur est un <?php echo $row['grade'];?>,dans l'universite de <?php echo $row['univ'];?>, il a eu son baccaloreat en <?php echo $row['baccalaureat'];?>et il a obtenue son diplome en informatique de l'universite de <?php echo $row['ingeniorat'];?>
                  et son magister de l'universite de <?php echo $row['Magistere'];?>
              </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/IMG_0409.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">Secteur De Travail </h2>
              <p>
                 MOUSSAOUI Boubakeur est un specialiste en <?php echo $row['secteur'];?>
              </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"> Domaine De Recherche </h2>
              <p>
                MOUSSAOUI Boubakeur prepare sa these sur <?php echo $row['Doctorat'];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <?php

                }  ?><!-- #about -->
    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">
        <header class="section-header">
          <h3>Nos Competences </h3>

        </header>
        <div class="skills-content">
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PACKET TRACER NETWORK<i class="val">70%</i></span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">NS-3 SIMULATION<i class="val">60%</i></span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">SQL SERVER<i class="val">50%</i></span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">ORACLE<i class="val">40%</i></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="action" class="wow fadeIn action1">
      <div class="container text-center">
        <h3>Articles</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="Article.php">Lire la suite</a>
      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      Call To Action Section 2
    ============================-->
    <section id="call-to-action" class="wow fadeIn action2">
      <div class="container text-center">
        <h3>Documents</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="documents.php">Lire la suite</a>
      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      Contact Section
    ============================-->
      <?php
    $con=mysqli_connect('localhost','root','','siteweb');
    $resul=mysqli_query($con,'SELECT * FROM admin');
        $row=mysqli_fetch_assoc($resul);
    ?>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h3>Contact</h3>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresse</h3>
              <address><?php echo $row["adresse"] ?></address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Télephone</h3>
              <p><a href="tel:<?php echo $row["phone"] ?>"><?php echo $row["phone"] ?></a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:<?php echo $row["email"] ?>"><?php echo $row["email"] ?></a></p>
            </div>
          </div>
        </div>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>


          <form action="http://scripte.oil-station.com/engine/contact.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div><input type="submit" value="Envoyé" name="submit"></div>
          </form>











        </div>
      </div>
    </section><!-- #contact -->
  </main>
  <!--==========================
    Footer
  ============================-->
  <?php
    include_once("footer.php")
    ?>
    <!-- #footer -->
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
