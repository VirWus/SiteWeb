<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin | Ajouter Document</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- page css -->
    <link href="css/pages/google-vector-map.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header card-no-border fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin | Boubaker</p>
        </div>
    </div><!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper"><!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">  <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- Search -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Profile -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Moussaoui Boubaker &nbsp;</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header><!-- End Topbar header --><!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <?php
                        include_once("aside.php");
                 ?>
                </nav><!-- End Sidebar navigation -->
            </div><!-- End Sidebar scroll-->
        </aside><!-- End Left Sidebar - style you can find in sidebar.scss  --><!-- Page wrapper  -->
        <div class="page-wrapper">  <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Ajouter Document</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active">Ajouter Document</li>
                        </ol>
                    </div>
                </div> <!-- Bread crumb and right sidebar toggle -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card"><!-- Tab panes -->
                            <div class="card-body">
                              <form class="form-horizontal form-material" method="POST" action="php/adddocument.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Titre Document:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Titre " name="titre" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12" >Année :</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="annee">                                                    <?php $conn=mysqli_connect('localhost','root','','siteweb');
                                                $resul=mysqli_query($conn,"SELECT DISTINCT module_annee FROM module ");
                                                while($row=mysqli_fetch_assoc($resul)){ ?>
                                                <option><?php echo $row["module_annee"]; ?></option>
<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group">

                                     <label class="col-sm-12">Module Document:</label>

                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="module" >
                                                <?php $conn=mysqli_connect('localhost','root','','siteweb');
                                                $resul=mysqli_query($conn,"SELECT DISTINCT module FROM module ");
                                                while($row=mysqli_fetch_assoc($resul)){ ?>
                                                <option><?php echo $row["module"] ?></option>
                                                   <?php } ?>
                                            </select>
                                  </div>
                                  </div>
                                  <br>
                                
                                    <div class="form-group">
                                        <label class="col-sm-12">Type Document:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="type" >
                                                <option>Cour</option>
                                                <option>TD</option>
                                                <option>TP</option>
  
                                                <option>examen</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Résumer :</label>
                                        <div class="col-md-12">
                                            <textarea rows="10" class="form-control form-control-line" name="resumer" placeholder="Texte"></textarea>
                                        </div>
                                    </div>
                                    <label class="col-md-12">Lien Document :</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="exemple.com" name="lien" class="form-control form-control-line">
                                        </div>
                                       </br>
                                                                        
                                        <div class="form-group">
                                        <div class="col-sm-12"  >
                                            <input  class="btn btn-success" type="file" name="file" style="padding :0px 0px;">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit"  style="padding:3px 15px" >Ajouter</button>
                                        </div>
                                    </div>
                                 </form>   
                                 <?php 
                                /*   $files=scandir("C:/xampp/htdocs/Moussaouii/admin/main/php/docs");
                                   print_r($files);
                                  
                                 ?>
                                  <?php 
                                   $files=scandir("C:/xampp/htdocs/Moussaouii/admin/main/php/docs");
                                   for ($a=2; $a<count($files) ; $a++) { 
                                     ?>
                                     <p>
                                     <a  style="padding: 0px 20px" class="col-sm-12"  download="docs/<?php echo $files[$a]?>" href="php/docs/<?php echo $files[$a]?>">telecharger <?php echo $files[$a] ?> </a>
                                     </p>
                                   <?php  
                                 }*/
                                 ?>


                            </div>
                        </div>
                    </div> <!-- End PAge Content -->
            </div><!-- End Container fluid  --><!-- footer -->
            <footer class="footer">
                © 2018 Admin
            </footer><!-- End footer -->
        </div><!-- End Page wrapper  -->
    </div> <!-- End Wrapper --><!-- All Jquery -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&sensor=true"></script>
    <script src="../assets/node_modules/gmaps/gmaps.min.js"></script>
    <script src="../assets/node_modules/gmaps/jquery.gmaps.js"></script>
</body>
</html>
