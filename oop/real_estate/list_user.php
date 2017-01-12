<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>List users</title>

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
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
?>
    <div class="container">
                    <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Avatar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($user = $result->fetch_assoc()) {
                                            $avatar = 'uploads/'.$user['avatar'];
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $user["id"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $user["first_name"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $user["last_name"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $user["username"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<img src='$avatar' width='100' height ='100'>";
                                            echo "</td>";
                                            echo "</tr>";
                                            
                                        }
                                        ?>
                                        </tr>
                                    
                                    <?php 
                                        }else {
                                            echo "No results";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
    </div>
</body>

</html>
