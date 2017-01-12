<?php

include("database/db_conection.php");
$edit_id = $_GET['id'];
$edit_query="select * from users WHERE id='$edit_id'";

$result=mysqli_query($dbcon,$edit_query);
while($row=mysqli_fetch_array($result))
    {
        $user_name=$row['username'];
        $user_email=$row['email'];
        $user_id = $row['id'];
    }
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="webroot\css\bootstrap.css">
    <title>Edit</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <fieldset>
                        <input type="hidden" name ="id" value="<?php echo $edit_id?>">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $user_name;?>" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $user_email;?>" autofocus>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Edit" name="edit" >

                        </fieldset>
                    </form>
                    <center><b>Users</b> <br></b><a href="view_users.php">Users page</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here

if(isset($_POST['edit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];//same
    $id=$_POST['id'];//same


    if($username=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
		exit();//this use if first is not work then other will not show
    }


    if($email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    	exit();
    }
	//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE email='$email' AND id != $id";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
        echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";
        exit();
    }
	//insert the user into the database.
    $update_user="UPDATE users SET email = '$email', username = '$username' WHERE id = $id";

    if(mysqli_query($dbcon,$update_user))
    {

        echo"<script>window.open('view_users.php','_self')</script>";
    }

}

?>