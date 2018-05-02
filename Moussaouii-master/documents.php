<html>
<head>
  <meta charset="utf-8">
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
<?php 
$conn=mysqli_connect('localhost','root','','siteweb');
if (isset($_GET["an"])){
$anne = $_GET["an"];
//$inserer=mysql_query("INSERT INTO support VALUES('','bdd','ll','ll','hk','ko')");
$sql="SELECT * FROM support where anneedoc = '$anne'";}
else{$sql="SELECT * FROM support";}
$resultat=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($resultat);
 ?>
</head>
<body>
  <?php
    include_once("header.php");
    ?>
    <section id="featured-services">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>
    <section id="portfolio"  class="section-bg" >
      <div class="container">
       <header class="section-header">
          <h3 class="section-title">Documents</h3>
        </header>
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
             <li data-filter="*" class="filter-active"><a href="">All</a></li>
             <!-- <li data-filter="*" class="filter-active">All</li>-->
              <?php 
              if (isset($_GET["an"])){
              $anne = $_GET["an"];
              $sql2="SELECT * FROM module where module_annee = '$anne'";}
           else{$sql2="SELECT * FROM module";}
            $resultat2=mysqli_query($conn,$sql2);
           $resultcheck2=mysqli_num_rows($resultat2);
           while($rows2=mysqli_fetch_assoc($resultat2)){
             ?>
              <li data-filter=".<?php echo $rows2["module"]; ?>"> <?php echo $rows2["module"];?></li>
              <!--<li data-filter=".filter-card"><a href="reseau.php">reseau de communication</a></li>
              <li data-filter=".filter-web"><a href="bddoo.php">Base de donnee oriente objet</a></li>
              <li data-filter=".filter-web"><a href="SIAD.php">systeme informatique a l’aide a la decision</a></li>-->
           <?php  
                }
            ?>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
        <?php 
        if($resultcheck>0){
         while($rows=mysqli_fetch_assoc($resultat)){
         ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?php echo $rows["moduledoc"];?> wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="<?php if($rows["lienteledoc"]=="vide"){echo $rows["liendrivedoc"];}else{echo "docs/".$rows["lienteledoc"];}?>" <?php if($rows["lienteledoc"]!="vide"){echo "download=".$rows["lienteledoc"];}?> class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="#"><?php echo $rows["nomdoc"];?></a></h4>
                <p><?php echo $rows["moduledoc"];?></p>
              </div>
            </div>
          </div>
          <?php  
            }}

          ?>
        </div>
      </div>
    </section>
<?php
include_once("footer.php");
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
