<?php 
    ob_start();
    session_start();
    //session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="publics-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="publics-admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="publics-admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="publics-admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="publics-admin/css/myCSS.css" rel="stylesheet">

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
            <?php include_once'layout/logo-header.php'; ?>
            <!-- Top Menu Items -->
            <?php include_once'layout/nav-header.php'; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include_once'layout/nav-left.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <?php 
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                    $page = 'home';
                }

                switch ($page) {
                    case 'list-tables':
                        include_once 'controller/table_c.php';
                        $table = new table_c();
                        $table->tables();
                        break;
                    
                    default:
                        include_once'layout/main-wrapper.php';                  
                        break;
                }

             ?>
            <!-- /.container-fluid -->

        </div>  
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="publics-admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="publics-admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="publics-admin/js/plugins/morris/raphael.min.js"></script>
    <script src="publics-admin/js/plugins/morris/morris.min.js"></script>
    <script src="publics-admin/js/plugins/morris/morris-data.js"></script>
    <script src="publics-admin/js/myJava.js"></script>

</body>

</html>
