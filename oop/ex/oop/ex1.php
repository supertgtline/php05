<?php

class Member{
    function get_member_id($first_name){

    	include 'connect.php';

    	$sql = "SELECT username FROM users WHERE first_name='$first_name'";
    	$result = $conn->query($sql);

        if ($result->num_rows > 0) {

		    while($row = $result->fetch_assoc()) {

		    	return $row["username"];   
		    }
		} else {
		    return "No results";
		}
    }
}

$mem = new Member();
$username = $mem->get_member_id('canh');
include 'view.php';


?>