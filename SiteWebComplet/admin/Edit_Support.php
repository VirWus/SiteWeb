<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

}else {
  header("Location:../admin/index.php");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Moussaoui Boubakeur</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

    <!-- <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="Admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                    <li>
                        <a href="Accueil.php"> <i class="menu-icon fa fa-laptop"></i>Admin </a>
                    </li>

                    <li>
                        <a href="Actualite.php"> <i class="menu-icon fa fa-pencil"></i>Actualite </a>
                    </li>
                    <li>
                        <a href="article.php"> <i class="menu-icon fa fa-newspaper" style="color:#e74c3c;"></i>Article </a>
                    </li>
                    <li>
                        <a href="Support.php"> <i class="menu-icon fa fa-book" style="color:#e74c3c;"></i>Support </a>
                    </li>
                    </li>
                    <li><hr style="border: 0.03em solid #e74c3c;" ></li>
                    <li>
                        <a href="../index.php"> <i class="menu-icon fa fa-chevron-circle-left"></i>Retour vers le site </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">

                        </div>

                        <div class="dropdown for-message">

                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="Admin.php"><i class="fa fa- user"></i>My Profile</a>


<a class="nav-link" href="Accueil.php"><i class="fa fa -cog"></i>Settings</a>

<a class="nav-link" href="../engine/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Admin</a></li>
                            <li class="active">Actualite</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



        <div class="content mt-3">
            <div class="animated fadeIn">
                  <div class="row">
 <?php
                            $con = mysqli_connect("localhost", "root", "", "univedu");
                              if(!$con){

                                 echo "site non connecté";
                                     }

                                     $id = $_GET['id'];
                                     $modulo = mysqli_query($con,"SELECT * FROM module");

                              $result =mysqli_query($con, "select * from support where id ='$id'");

                                 if($Rs=mysqli_fetch_assoc($result))
                                     {
                             ?>

                   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">Modifier votre Support</div>
                      <div class="card-body card-block">
                        <form action="update-sup.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="">
                          <div class="form-group">
                          <p>Nom :</p>
                            <div class="input-group">
                              <input type="text" id="nom" name="nom" value="<?php echo base64_decode($Rs['nom']); ?>" placeholder="Nom" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                          <p>Niveau :</p>
                            <div class="input-group">
                            <select  id="annee" name="annee"  placeholder="Année" class="form-control">
                                <option>deuxième Licence</option>
                                <option>troisième Licence </option>
                                <option>Master</option>
                                <option>autre</option>
                              </select>
                                  <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>

                          <div class="form-group">
                          <p>Résumer : </p>
                            <div class="input-group ">
                              <input type="text" id="resumer" name="resumer" value="<?php echo base64_decode($Rs['resumer']); ?>" placeholder="Résumer" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-file"></i></div>
                             </div>
                          </div>
                          <div class="form-group">
                          <p>Type :</p>
                            <div class="input-group">
                             <select name="type" id="type" class="form-control">
                               <option value="0">Please select</option>
                               <option value="1">Cour</option>
                               <option value="2">Traveaux dériger</option>
                               <option value="3">Traveaux pratiques</option>
                               <option value="4">vidéo</option>
                             </select>
                                 <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <?php
                             ?>
                            <p> Module :</p>
                            <div class="input-group">
                             <select name="module" id="module" class="form-control">
                               <option value="0">Le module</option>
                               <?php while ($md=mysqli_fetch_assoc($modulo)) {
                               ?>
                               <option value="<?php echo $md["id"]; ?>"><?php echo $md["nom_module"] ;?></option>
                               <?php } ?>
                             </select>
                                 <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                          <p>Lien :</p>
                            <div class="input-group">
                              <input type="text" id="lien" name="lien"  value="<?php echo base64_decode($Rs['lien']); ?>"  placeholder="Lien" class="form-control">
                                  <div class="input-group-addon"><i class="fa fa-link"></i></div>
                            </div>
                          </div>

                             <div style=" margin: 30px 0px;" class="row form-group">
            <h4>files</h4>
            <div class="input-group">
                <label style="margin: 0;" class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input id="file-input" name="fileto" class="form-control-file" type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
                     </div>
                          <div  class="form-actions form-group"><button  type="submit" class="btn btn-primary btn-block">Modifier</button></div>
                        </form>
                      </div>
                    </div>
                  </div>

            <?php } ?>
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">Supprimer votre Module</div>
                      <div class="card-body card-block">
                        <form action="#" method="POST" enctype="multipart/form-data" >
                        <div class="form-group">
                            <?php
                             ?>
                            <p> Module :</p>
                            <div class="input-group">
                             <select name="module" id="module" class="form-control">
                               <option value="0">Le module</option>
                               <?php while ($md=mysqli_fetch_assoc($modulo)) {
                               ?>
                               <option value="<?php echo $md["nom_module"]; ?>"><?php echo $md["nom_module"] ;?></option>
<?php } ?>
                             </select>
                                 <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <p> Niveau :</p>
                            <div class="input-group">
                            <select  id="annee" name="niveau"  placeholder="Année" class="form-control">
                              <?php while ($md=mysqli_fetch_assoc($modulo)) { ?>
                                <option value="<?php echo $md["niveau"]; ?>"><?php echo $md["niveau"] ;?></option>
<?php } ?>
                              </select>
                                  <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>



                          <div  class="form-actions form-group"><button  type="submit" name="sub_mod" class="btn btn-danger btn-block">Supprimer</button></div>
                        </form>
                      </div>
                    </div>
                </div>
                  </div>
                  <?php
                  if (isset($_POST["sub_mod"]) &&  isset($_POST["module"]) && isset($_POST["niveau"])) {
                  include_once("../engine/connect/connection.php");
                  $nom_module = $_POST["module"];
                  $niveau = $md["niveau"];
                  $idd =  $md["id"];
                  echo $niveau;
                  $qq = mysqli_query($connect,"DELETE FROM module WHERE nom_module = '$nom_module' AND niveau = '$niveau' ");
                  }
                   ?>
            </div><!-- .animated -->

        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

<script type="text/javascript">

  $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });

});

</script>
    <script type="text/javascript">

      $('#bootstrap-data-table-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
        }
    </script>


</body>
</html>
