<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="style/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/helper.css" rel="stylesheet">
    <link href="style/css/style.css" rel="stylesheet">
    
    <script src="style/js/custom.min.js"></script>
    <script src="style/js/lib/jquery/jquery.min.js"></script>
    <script src="style/js/lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="style/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="style/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="style/js/custom.min.js"></script>

</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->

    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">

                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b><img src="style/img/dashboard.png" alt="homepage" class="dark-logo" /></b>
                        <!-- Logo text -->
                        <span>Dashboard</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-2">
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <a href="admin-edit.php"><li><i class="ti-settings"></i> Setting</a></li>
                                    <a href="login.php"><li><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>


        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li></br></li>
                        <li> <a href="about-edit.php"><i class="fa fa-table"></i><span class="hide-menu">About</span></a></li>
                        <li> <a href="admin-edit.php"><i class="fa fa-wrench"></i><span class="hide-menu">Admin</span></a></li>
                        <li> <a href="login.php"><i class="fa fa-repeat"></i><span class="hide-menu">Logout</span></a></li>
			            
                        </ul>
                            </div>
                        </li>
                    </ul>
            </nav>

        <div class="page-wrapper">