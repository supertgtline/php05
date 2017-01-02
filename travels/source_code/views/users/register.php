<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../webroot/css/frontend/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../webroot/css/frontend/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../webroot/css/frontend/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->

    <link href="../../webroot/css/frontend/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../webroot/css/frontend/bootstrap-datepicker.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->

    <script src="../../webroot/js/frontend/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->

    <script src="../../webroot/js/frontend/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->

    <script src="../../webroot/js/frontend/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->

    <script src="../../webroot/js/frontend/sb-admin-2.js"></script>

    <script src="../../webroot/js/frontend/bootstrap-datepicker.js"></script>
</head>

<body>
<?php
include '../../config/config.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Register</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action = "register_complete.php" enctype="multipart/form-data" >
                        <fieldset>
                            <div class="form-group">
                                <label>Your name</label>
                                <input class="form-control" placeholder="Your name" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Pass name" name="password" type="password" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" placeholder="phone" name="phone" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="avatar">
                            </div>
                            <button type="submit" name = "register" class="btn btn-primary btn-lg">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- code PHP -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#birthday').datepicker({ format: 'dd/mm/yyyy' });
    });
</script>
</body>

</html>
