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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
</head>

<body>
<?php 
    include 'connect.php';
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
                                    <label>First name</label>
                                    <input class="form-control" placeholder="First name" name="first_name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input class="form-control" placeholder="Last name" name="last_name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="User name" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Pass name" name="password" type="password" autofocus>
                                </div>
                                 <div class="form-group">
                                    <label>Avatar</label>
                                        <input type="file" name="avatar">
                                    </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <div class='input-group date' id='birthday'>
                                        <input type='text' name="birthday" class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="1"> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender"  value="2">Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" placeholder="phone" name="phone" type="text" autofocus>
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
