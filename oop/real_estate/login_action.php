<?php 
    session_start();
    include 'connect.php';
    //function password
    function encrypt_password($password){
        $new_password = md5($password);
        return $new_password;
    }
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = encrypt_password($_POST['password']);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $check = $conn->query($sql);
        if($check->num_rows){
            $row = $check->fetch_assoc();
            $_SESSION['user_login'] = $row;
            header('Location: login_success.php');
        }else{
            header('Location: login.php');
        }
    }
    ?>