<?php 
    include 'connect.php';
    //Check submit register
    if(isset($_POST["register"])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        //
        $sql = "INSERT INTO users (first_name, last_name, password, gender)
                VALUES ('$first_name','$last_name','$password','$gender')";

        if ($conn->query($sql) === TRUE) {
            echo "Register success";
        }
        
        
    }
?>

<!--         $last_name  = $_POST['last_name'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $first_name = $_POST['first_name'];
        //insert data to users table
        $sql = "INSERT INTO users (first_name)
                VALUES ('$first_name')";
        if ($conn->query($sql) === TRUE) {
            echo "Register success";
        }  -->