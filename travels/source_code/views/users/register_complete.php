<?php
include '../../config/config.php';
//Check submit register
if(isset($_POST["register"])) {
    $f_name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    //
    $sql = "INSERT INTO users (name, email, password, phone)
                VALUES ('$f_name','$email','$password','$phone')";

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