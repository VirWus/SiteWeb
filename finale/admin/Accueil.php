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

  <link rel="shortcut icon" href="../img/favicopn.png">

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
    <?php
   $db = mysqli_connect("localhost","root","","univedu");
    $resultat = mysqli_query($db,"SELECT * FROM admin");
    $l = mysqli_fetch_assoc($resultat);
    ?>
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
  <a href="Admin.php"> <i class="menu-icon fa fa-dashboard" ></i>Dashboard </a>
</li>
<h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

<li>
  <a href="Accueil.php"> <i class="menu-icon fa fa-laptop" style="color:#e74c3c;"></i>Admin </a>
</li>

<li>
  <a href="Actualite.php"> <i class="menu-icon fa fa-pencil"></i>Actualite </a>
</li>
<li>
  <a href="article.php"> <i class="menu-icon fa fa-pencil-square-o"></i>Article </a>
</li>
<li>
  <a href="Support.php"> <i class="menu-icon fa fa-book" ></i>Support </a>
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
                            <li><a href="Admin.php">Dashboard</a></li>
                            <li><a href="Accueil.php">Admin</a></li>
                            <li class="active">Accueil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
             <div class="row">
                    <div class="col-lg-6">
                    <div class="card">
                     <div class="card-header">Modifier Les informations</div>
                      <div class="card-body card-block">
                        <form method ="POST" action="update-admin.php?id=<?php echo$l['id']?>" enctype="multipart/form-data">
                          <div class="form-group">
                            <p> Username :</p>
                            <div class="input-group">
                              <input type="text" id="username2" name="username"  value="<?php echo$l['username']?>" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <p> Email :</p>
                            <div class="input-group">
                              <input type="email" id="email2" name="email"  value="<?php echo$l['email']?>" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <p> Passeword :</p>
                            <div class="input-group">
                              <input type="password" id="password2" name="mdp"   placeholder="modifier votre mot de pass"  class="form-control">
                              <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            </div>
                          </div>
                           <div class="form-group">
                            <p> University : </p>
                            <div class="input-group">
                              <input type="text" id="university2" name="univ"  value="<?php echo$l['univ'];?>"  class="form-control">
                              <div class="input-group-addon"><i class="fa fa-university"></i></div>
                            </div>
                          </div>
                           <div class="form-group">
                            <p> Grade :</p>
                            <div class="input-group">
                              <input type="text" id="grade2" name="grade"  value="<?php echo$l['grade'];?>"  class="form-control">
                              <div class="input-group-addon"><i class="fa fa-graduation-cap"></i></div>
                            </div>
                            </div>

                            <div class="form-group">
                                <p> Bio :</p>
                            <div class="input-group">
                              <input type="text" id="bio" name="bio"  value="<?php echo$l['bio'];?>"  class="form-control">
                              <div class="input-group-addon"><i class="fa fa-edit"></i></div>

                            </div>
                            </div>
                            <div style=" margin: 30px 0px;" class="row form-group">
            <h4>Photo de Profil :</h4>
            <div class="input-group">
                <label style="margin: 0;" class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input  name="fileto" class="form-control-file" type="file" style="display: none;" multiple>
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



                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>secteur</th>
                        <th>University</th>
                        <th>Grade</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Bio</th>
                      </tr>
                    </thead>
                    <tbody>
                                 <?php  $resultat = mysqli_query($db,"SELECT * FROM admin");
                                 $i=1 ;
    while ($row = mysqli_fetch_assoc($resultat)){ ?>
                      <tr>
                        <td><?php   echo $i++;  ?></td>
                        <td><?php echo $row["secteur"]; ?></td>
                        <td><?php echo $row["univ"]; ?></td>
                        <td><?php echo $row["grade"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["bio"]; ?></td>
                        <!--<td> <div class="btn btn-success btn-app-sm"> </div> <div class="btn btn-success btn-app-sm"> </div> <div class="btn btn-success btn-app-sm"> </div></td>-->
                      </tr>  <?php } ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                </div>
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
