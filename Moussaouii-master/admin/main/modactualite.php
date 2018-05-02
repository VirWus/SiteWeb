
<?php
$id=$_GET["id"];
$conn=mysqli_connect('localhost','root','','siteweb');
$resultat=mysqli_query($conn,'SELECT * From actuallite where idactua= '.$id);
$row=mysqli_fetch_assoc($resultat);
session_start();
 if (!(isset($_SESSION ["username"]))) {header("location: ../main/login/index.php ");}
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin | Modifier Actualité</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- page css -->
    <link href="css/pages/icon-page.css" rel="stylesheet">
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
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
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
                    </ul><!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0"><!-- Profile -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Moussaoui Boubaker &nbsp;</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header><!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <?php include_once("aside.php"); ?>
                </nav><!-- End Sidebar navigation -->
            </div><!-- End Sidebar scroll-->
        </aside><!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Modifier Actualité</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active">Suprimer / Modifier</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Actualité :</h4>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="php/modactualite.php?id=<?php echo $id; ?>">
                                      <div class="form-group">
                                        <label class="col-sm-12"></label>
                                    <div class="form-group">
                                        <label class="col-md-12">Titre :</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $row["titreactua"] ?>" class="form-control form-control-line" name="titre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Descpription :</label>
                                        <div class="col-md-12">
                                            <input rows="10" value="<?php echo $row["contenuactua"] ?>" class="form-control form-control-line" name="contenu"></input>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="col-md-12">date</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $row["dateactua"] ?>" class="form-control form-control-line" name="date">
                                        </div>
                                    </br>
                                    <div>
                                        <label class="col-md-12">Lien :</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $row["LienImage"] ?>" class="form-control form-control-line" name="lien">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            </div>
            <footer>CSMI|MOUSSAOUI BOUBAKER </footer>  <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
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
</body>
</html>
