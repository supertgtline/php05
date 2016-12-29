<?php
/**
 * Created by PhpStorm.
 * User: ThaoGiang
 * Date: 12/29/2016
 * Time: 7:11 PM
 */
$servername = "localhost";
$username ="root";
$password ="";
$db_name="real_estate";
$conn = new mysqli($servername,$username,$password,$db_name);
mysqli_set_charset($conn,"utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>