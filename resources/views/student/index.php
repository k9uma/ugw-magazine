
<html>
    <head>
        <title>Student Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="favicon.ico">		
        <meta name="" content="annual magazine">		
        <link href="scripts/css/AdminLTE.min.css" rel="stylesheet">
        <link href="scripts/css/skins/_all-skins.css" rel="stylesheet">
        <link href="scripts/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="scripts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="scripts/plugins/dataTables/dataTables.bootstrap.css">			 
        <style type="text/css">
            body{
                overflow:initial;
            }
        </style>
        <script type="text/javascript">
            function refresh() {
                if (new Date().getTime() - time >= 60000)
                    window.location.reload(true);
                else
                    setTimeout(refresh, 10000);
            }

            setTimeout(refresh, 10000);
        </script>
    </head>
    <body class="hold-transition skin-blue">
        <div class="wrapper">
            <header class="main-header">    
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>U</b>GW</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-top:10px;">
                        <img src="img/logo2.png" class="img-responsive img-circle" width="30" height="30" />
                    </span>
                </a>    	
                <nav class="navbar navbar-static-top">	      
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="navbar-brand" href="#">UGW ANNUAL MAGAZINE</a>

                        </li>
                    </ul>
                    <!-- User Account: style can be found in dropdown.less -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="hidden-xs">USERNAME</span>
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
            <!--?php include'../../components/sidebar.php';?-->  		 
            <div class="content-wrapper" style="margin-left:0px;">	    
                <section class="content-header">
                    <h1> Student <small>Control panel</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <div class="col-md-12" style="background-color:#fff;">
                    <!--first col-->
                    <div class="col-md-4" style="margin-top:30px;">
                        <div class="col-md-12">
                            <form enctype="multipart/form-data" action="" method="POST"  >
                                <input type="text" name="title" placeholder="Title" class="form-control" required="true">
                                Choose the file to upload
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-upload"></i>
                                    </span>
                                    <input class="form-control" type="file" name="uploadedfile"/>
                                </div>
                                <br/>
                                <input name="fileupload"  value="Upload File" type="submit" class="btn btn-primary btn-lg active btn-sm"/>

                            </form>
                        </div>
                    </div>
                    <!--/first col-->
                    <!--second col-->
                    <div class="col-md-8"  style="background-color:#fff; margin-top:30px;">

                        <section class="content">
                            <div class="row">                     
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Article Title</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Article Title</td>
                                            <td>Browser</td>
                                            <td>Platform(s)</td>
                                            <td>Engine version</td>
                                            <td>CSS grade</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>		         
                        </section>
                    </div>
                    <!--/second col-->
                </div>

            </div>  
            <footer class="main-footer"style="margin-left:0px;">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <div  style="color:#000; margin-top:1px;">
                    <div><strong>Copyright &copy; -
                            <?php echo date("Y"); ?>
                            The UGW Annual Magazine.</strong> All rights reserved
                    </div></div>
            </footer>
        </div>
    </body>
    <script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>

    <script src="scripts/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="scripts/scripts/app.min.js"></script>
    <script src="scripts/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="scripts/plugins/dataTables/dataTables.bootstrap.css"></script>
    <script>
            $(function () {
                $("#example2").DataTable();
            });
    </script>
</html>




