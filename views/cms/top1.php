<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PATH; ?>assets/cms/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PATH; ?>assets/cms/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo ROOT_PATH; ?>assets/cms/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Football Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                    <?php if(isset($_SESSION['is_logged_in'])); ?>
                <li class="dropdown">
                    <a href="<?php echo ROOT_URL; ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome to <?php echo $_SESSION['user_data']['username']; ?> Saloon <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li class="divider"></li>
                   
                        <li>
                            <a href="<?php echo ROOT_URL; ?>users/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo ROOT_URL; ?>reservation"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    
                   
                    <li>
                       
                            <li>
                                <a href="<?php echo ROOT_URL; ?>time"><span class=" glyphicon glyphicon-time"></span> Time Table</a>
                            </li>
                            
                      
                    </li>



            <li>
              <a href="<?php echo ROOT_URL; ?>reservations"><span class="glyphicon glyphicon-th-list"></span> List of Customers</a>
            </li>
            <li>
              <a href="<?php echo ROOT_URL; ?>reservations/add"><span class="glyphicon glyphicon-user"></span> Add new Customer</a>
            </li>
            
         
        </li>
        
            <li>
              <a  href="<?php echo ROOT_URL; ?>news" ><span class="glyphicon glyphicon-th-list"></span> List of News</a>
            </li>
            <li>
              <a href="<?php echo ROOT_URL; ?>news/add"> Add News</a>
            </li>
            
         
        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                         