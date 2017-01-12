<?php session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

</head>

<body>
    <div class="container">
        <div class="row">
                <?php $user = $_SESSION['user_login'];?>
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <?php $user['first_name'].' '.$user['last_name']?>
                        </div>
                        <div class="panel-body">
                            <p>Username: <?php echo $user["username"]?></p>
                            <p>Birthday: <?php echo date('d-m-Y',$user['birthday'])?></p>
                            <p>Avatar: <img src="<?php echo 'uploads/'.$user['avatar'];?>" width="100" height ="100"></p>
                        </div>
                    </div>
                        <!-- /.col-lg-4 -->
                </div>
                <div><a href="create_post.php"> Click here</a> to create article eal estate</div>
        </div>
    </div>

</body>

</html>
