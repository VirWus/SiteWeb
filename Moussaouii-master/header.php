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