<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
Session_Start();
if( $_SESSION==NULL )
    header("Location:login.html");
 $server = "localhost";
 $login = "root";
 $pass = "";
 $connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);


 $pdoStat = $connexion->prepare("SELECT * from admin where id =".$_SESSION['id']);
 
 $executeIsOk = $pdoStat->execute();
 $result = $pdoStat->fetchAll();
 
 foreach($result as $admin)
 {
     $profilePic = $admin['profilePic'];
 }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
<?php 

?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            
                            <img src="plugins/images/favicon.png" style="width : 120px; margin-left :40px" alt="homepage" />
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" style="background-color : #CB2400" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block mr-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src=<?php echo $profilePic ?> alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $admin['fullName'] ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <style>
                
                </style>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Tableau des Mainteneurs</span>
                            </a>
                        </li>

                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">List des NOC</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="zone.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Les zones</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="carte.php"
                                aria-expanded="false">
                                <i class="fas fa-credit-card"></i>
                                <span class="hide-menu">Les cartes d'accès</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="post.php"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Ecrire un commentaire</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php"
                                aria-expanded="false">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <span class="hide-menu">Se Deconnecter</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="index.php">Dashboard</a></li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                       
                        <div class="white-box">
                        <div style="width : 150px; height : 22px; padding-left : 10px;position : relative; left: 1000px;">    
                        <a href="#" class="btn btn-outline-warning" style="text-decoration : none; color : black; font-size : 15px; font-family : Arial" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Ajouter Maintenancier </a>
                        </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title me-auto" id="exampleModalLabel">Ajouter Maintenancier</h4>
                        <small style="position : relative; left : 200px; top : 20px">Administrateur</small>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="AddMain.php" method ="post">
                    <div class="input-group">

								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user"></i></span>
								</div>
								<input type="text" name="nom" class="form-control" placeholder="Nom"/>
							</div><br />
                            <div class="input-group">
                            <div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user"></i></span>
								</div>
								<input type="text" name="prenom" class="form-control" placeholder="Prenom"/>
							</div><br />

                            <div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
								</div>
									<input type="Email" name="email" class="form-control" placeholder="Adresse mail"/>
							</div><br />     

                            <div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i></span>
								</div>
									<input type="text" name="cin" class="form-control" placeholder="CIN"/>
							</div><br />     

                            <div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
								</div>
									<input type="text" name="phone" class="form-control" placeholder="Phone number"/>
							</div><br />     

                	<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-key icon"></i></span>
								</div>
									<input type="Password" name="password" class="form-control" placeholder="Mot de passe"/>
							</div><br />
                    
                            <div class="input-group">
								<div class="input-group-prepend">
                                
									<span class="input-group-text"><i class="fas fa-globe"></i></span>
								</div>
                                
                                <select name="zone" id="" class="form-control">
                                    <?php
                                    $pdoStat = $connexion->prepare("SELECT * from zone where display =1");
 
                                    $executeIsOk = $pdoStat->execute();
                                    $result = $pdoStat->fetchAll();
                                    
                                    foreach($result as $zone)
                                    {
                                        var_dump($result);
                                        echo"<option>".$zone['Emplacement']."</option>
                                        ";
                                    }
                                    ?>
                                    
                                </select>
									
							</div><br />    
                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Save changes</button>
                        
                    </div>  
                            </form>
       
 
	
                    </div>
                    
                                </div>
                </div>
                </div>
                            <h3 class="box-title">Active entreprise Table</h3>
                            
                            <div class="table-responsive">
                               
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Prenom</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Carte</th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $entReq = $connexion->prepare("Select * from mainteneur where display='1'");
                                        $exec = $entReq->execute();
                                        $resu = $entReq->fetchAll();
                                        
                                        $res = 1;
                                        foreach($resu as $r)
                                        {
                                            $idEnt=$r['id'];
                                            $prenom=$r['prenom'];
                                            $entName=$r['nom'];
                                            $email= $r['email'];
                                            $profilePic =$r['profilePic'];
                                            $status='<p style="color : #2AE320 !important">Active</p>';
                                            $carte = $r['idCarte'];
                                            echo '
                                            <tr>
                                            <td> '.$res.'</td>
                                            <td>'.$entName.'</td>
                                            <td><p>'.$prenom.'</p></td>
                                            <td><p style="color : #E71010 !important">'.$email.'</p></td>
                                            <td>'.$status.'</td>
                                            <td>';
                                            if ($carte ==0)
                                            echo 'N\'a pas encore une carte';
                                            else {
                                                echo $carte;
                                            }
                                            echo '</td>
                                            <td>
                                                <form action="entTreatement.php?idEnt='.$idEnt.'" method="post" class="form">
                                                    <input type="submit" name="deleteM" value="Delete" class="btn btn-danger">
                                                </form>
                                            </td> 
                                            </tr>
                                            
                                            ';
                                            $res++;
                                        }
                                        ?>
</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Archive Table</h3>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Prenom</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Carte</th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $entReq = $connexion->prepare("Select * from mainteneur where display='0'");
                                        $exec = $entReq->execute();
                                        $resu = $entReq->fetchAll();
                                        
                                        $res = 1;
                                        foreach($resu as $r)
                                        {
                                            $idEnt=$r['id'];
                                            $entName=$r['nom'];
                                            $prenom=$r['prenom'];
                                            $email= $r['email'];
                                            $profilePic =$r['prenom'];
                                            $status='<p style="color :#E71010 !important">Not Active</p>';
                                            $carte = $r['idCarte'];
                                            echo '
                                            <tr>
                                            <td> '.$res.'</td>
                                            <td>'.$entName.'</td>
                                            <td><p>'.$prenom.'</p></td>
                                            <td><p style="color : #E71010 !important">'.$email.'</p></td>
                                            <td>'.$status.'</td>
                                            <td>';
                                            if ($carte ==0)
                                            echo 'N\'a pas encore une carte';
                                            else {
                                                echo $carte;
                                            }
                                            echo '
                                            <td>
                                                <form action="entTreatement.php?idEnt='.$idEnt.'" method="post" class="form">
                                                    <input type="submit" name="reactivateM" value="Reactivate" class="btn btn-info">
                                                </form>
                                            </td> 
                                            </tr>
                                            
                                            ';
                                            $res++;
                                        }
                                        ?>
</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>