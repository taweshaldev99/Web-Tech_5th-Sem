
<?php
$host_name = "localhost";
$user_name = "root";
$passwrord = "";


$conn =new mysqli($host_name,$user_name,$passwrord);

if($conn->connect_error){
    die("Connection error".$conn-> connect_error);
};
 echo"Connection Successfull";

 $sql ="CREATE DATABASE student_db";
 $conn->query($sql);

 $conn->close();
?>
