
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University of Greenwich-ANNUAL MAGAZINE</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="../../favicon.ico">    
        <meta name="" content="annual magazine">
        <!--Style Sheetsp-->
        <link href="scripts/css/AdminLTE.min.css" rel="stylesheet">
        <link href="scripts/css/skins/_all-skins.css" rel="stylesheet">
        <link href="scripts/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="scripts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
        <!--DataTables-->
        <link href="scripts/plugins/dataTables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="scripts/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>

        <style>body{overflow: initial;}</style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini" >

        <div class="wrapper">
            echo'<header class="main-header">    
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>U</b>GW</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-top:0px;">
                        <img src="scripts/img/logo.png" class="img-responsive" />
                    </span>
                </a>      
                <nav class="navbar navbar-static-top">        
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="navbar-brand" style="font-family:;Adobe Arabic" href="#">UNIVERSITY of GREENWICH ANNUAL MAGAZINE</a>

                        </li>
                    </ul>
                    <!-- User Account: style can be found in dropdown.less -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="hidden-xs">';echo $_SESSION['name'] .'</span>
                                </a>
                                <ul class="dropdown-menu">              
                                    <li class="user-body">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>  
            <aside class="main-sidebar" >
                <section class="sidebar">       
                    <div class="user-panel">
                        <div style="margin-left:10px;"class="pull-left image">
                            <img src="scripts/img/boxed-bg.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>';
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>            
                        </li>                  
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>User Accounts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o text-aqua"></i>
                                        <span>Student Accounts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o text-aqua"></i>
                                        <span>Coordinator Accounts</span>
                                    </a>
                                </li>
                                <li>                                                    
                                    <a href="#">
                                        <i class="fa fa-circle-o text-aqua"></i>
                                        <span>Manager Accounts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o text-aqua"></i>
                                        <span>Password Reset</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-gears"></i>
                                <span>Date Settings</span>                      
                            </a>
                            <ul class="treeview-menu">
                                <li></li>
                                <li></li>                   
                            </ul>
                        </li>

                </section>

            </aside>

            <div class="content-wrapper">     
                <section class="content-header">
                    <h1> Administrator <small>Control panel</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Academic Year</th>
                                    <th>Openning Date</th>
                                    <th>Closing Date(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.1</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.2</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.3</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.4</td>
                                    <td>A</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </section>
            </div>  
            <footer class="main-footer">

                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <div  style="color:#000; margin-top:1px;">
                    <div><strong>Copyright &copy;
                            <?php echo date("Y"); ?>
                            The UGW Annual Magazine.</strong> All rights reserved
                    </div></div>
            </footer>
        </div>
    </body>
    <script type="text/javascript" src="scripts/plugins/jquery-1.10.2.js"></script>       
    <script src="scripts/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
    <script src="scripts/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="scripts/plugins/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="scripts/plugins/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="scripts/scripts/app.min.js" type="text/javascript"></script>
    <script>
        $(function () {

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <script src="scripts/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>                
</html>


