<?php
$host_name = " localhost";
$user_name = "root";
$passwrord = "";
$db_name = "bit_db";

$conn =new mysqli($host_name,$user_name,$passwrord,$db_name)

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
}
 echo"Conndection Successfull";
?>
