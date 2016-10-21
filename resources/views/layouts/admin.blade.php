
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

@yield('content')
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