
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Sazón web Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="assets/css/main.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<!-- #Float icon -->
<!-- Morphing Search  -->

<!-- /morphsearch-content --> 
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.php"> Sazón Web </a> </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-looks"></i></a></li>
        </ul>
    </div>
</nav>
<?php var_dump($this->session->userdata('idEmpleado')); ?>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/Login.jfif" alt=""> </div>
            <div class="admin-action-info"> <span>Admin</span>
                <h3>Esneyder</h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="active open"><a href="index.php"><i class="zmdi zmdi-home"></i><span>Inicio</span></a></li>                                               
                <li><a href="menu.php" class="menu-toggle"><i class="zmdi zmdi-cutlery"></i><span>Menú</span> </a>
                     <ul class="ml-menu">
                        <li><a href="tradicional.php">Tradicional</a></li>
                        <li><a href="saludable.php">Saludable</a></li>                       
                        <li><a href="vegetariano.php">Vegetariano</a></li>
                    </ul>
                </li>
                <li><a href="pedidos.php"><i class="zmdi zmdi-badge-check"></i><span>pedidos</span></a></li>                                               
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-check-circle"></i><span>Productos</span> </a>
                <ul class="ml-menu">
                        <li><a href="tipoproducto">Tipo Producto</a></li>
                        <li><a href="add-doctor.html">Producto</a></li>
                    </ul>
                </li>
                <li><a href="clientes.php" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Clientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients.html">All Patients</a></li>
                        <li><a href="add-patient.html">Add Patient</a></li>                       
                        <li><a href="patient-profile.html">Patient Profile</a></li>
                        <li><a href="patient-invoice.html">Patient Invoice</a></li>
                    </ul>
                </li>
                <li><a href="tiquetera.php" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Tiquetera</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="payments.html">Payments</a></li>
                        <li> <a href="add-payments.html">Add Payment</a></li>
                        <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                    </ul>
                </li>
                <li><a href="domiciliario"><i class="zmdi zmdi-bike"></i><span>Domiciliarios</span></a></li>
                <li><a href="<?php echo base_url();?>zonas"><i class="zmdi zmdi-pin-drop"></i> Zonas </a></li>
                
                
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Colores</a></li>            
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>           
        </div>
    </aside>
    <!-- #END# Right Sidebar --> 
</section>

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Inicio</h2>            
        </div> 
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">  
                
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto pariatur, ipsam eius nisi ut natus qui voluptate mollitia, aperiam cupiditate nam ea veniam dicta, tempora odit commodi quos sequi dolorem.</p>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto pariatur, ipsam eius nisi ut natus qui voluptate mollitia, aperiam cupiditate nam ea veniam dicta, tempora odit commodi quos sequi dolorem.</p>

                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto pariatur, ipsam eius nisi ut natus qui voluptate mollitia, aperiam cupiditate nam ea veniam dicta, tempora odit commodi quos sequi dolorem.</p>



                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto pariatur, ipsam eius nisi ut natus qui voluptate mollitia, aperiam cupiditate nam ea veniam dicta, tempora odit commodi quos sequi dolorem.</p>



                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto pariatur, ipsam eius nisi ut natus qui voluptate mollitia, aperiam cupiditate nam ea veniam dicta, tempora odit commodi quos sequi dolorem.</p>

                </div>


                    
            </div>
        </div>        
	</div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/charts/sparkline.min.js"></script>
</body>
</html>
