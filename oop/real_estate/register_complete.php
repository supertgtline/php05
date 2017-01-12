<?php 
    include 'connect.php';
    //function password
    function encrypt_password($password){
        $new_password = md5($password);
        return $new_password;
    }
    //function check empty
    function check_empty($check){
        if(empty($check)){
            return true;
        }else{
            return false;
        }

    }
    //function check birthday
    function check_birthday($birthday){
        //
        if(check_empty($birthday)){
            return true;
        }
        if((date('Y') - date('Y',$birthday))>=18){
            return false;
        }else{
            return true;
        }

    }
    function check_username($username){
        include 'connect.php';

        $sql = "SELECT username FROM users WHERE username = '$username'";

        $check = $conn->query($sql);
        if($check->num_rows){
            return true;
        }else{
            return false;
        }
    }
    $first_name= $_REQUEST["first_name"];
    if(check_empty($first_name)){
        echo "Please insert first name";
        exit();
    }
    $last_name= $_REQUEST["last_name"];
    
    $username= $_REQUEST["username"];

    if(check_username($username)){
        echo "This username is exist, please input other username";
        exit();
    }

    $password= encrypt_password($_REQUEST["password"]);
    
    $avatar= $_FILES["avatar"]["name"];
    $target_dir="uploads/";
    $target_file = $target_dir.basename($_FILES["avatar"]["name"]);
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
    } else {
        echo "file is not an image";
    }
    
    $birthday= strtotime($_REQUEST["birthday"]);

    if(check_birthday($birthday)){
        echo "Please insert birthday";
        exit();
    }  

    $gender= $_REQUEST["gender"];
    
    $created= strtotime(date('Y/m/d h:i:s'));
    if (empty($gender)) {
        $gender=1;
    }
    
    $email= $_REQUEST["email"];
    
    $phone= $_REQUEST["phone"];
    
    $sql = "INSERT INTO users (first_name, last_name, username, password, avatar, birthday, gender, email, phone,created,modified) VALUES ('$first_name','$last_name', '$username', '$password', '$avatar', '$birthday', '$gender', '$email', '$phone', '$created', '$created')";
    if ($conn->query($sql)===TRUE) {
        echo "Register success <a href='login.php'> click here</a> to login";
    }