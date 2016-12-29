<?php
include 'connect.php';
/**
 * Created by PhpStorm.
 * User: ThaoGiang
 * Date: 12/29/2016
 * Time: 7:18 PM
 */
//function password
function encrypt_password($password)
{
    $new_password = md5($password);
    return $new_password;

}
function check_empty()
{
    if (empty($check)){
        return true;
    }
    else{
        return false;
    }
}
//function check birthday.
function check_birthday($birthday){
if(check_empty($birthday)){
    return true;
}
if(date('Y') - date('Y',$birthday)>=18){
    return false;
}
else{
    return true;
}
}
function check_username($username){
    include 'connect.php';
    $sql ="SELECT username FROM users WHERE username ='$username'";
    $check = $conn->query($sql);
    if($check>num_rows){
        return true;
    } else{
        return false;
    }
}
$first_name = $_REQUEST["first_name"];
if(check_empty($first_name)){
    echo "Please insert first name";
    exit();
}
$last_name = $_REQUEST("last_name");

?>

