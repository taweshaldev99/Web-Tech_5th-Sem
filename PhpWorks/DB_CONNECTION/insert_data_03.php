
<?php
$host_name = " localhost";
$user_name = "root";
$passwrord = "";
$db_name = "student_db";

$conn =new mysqli("localhost","root","","student_db");

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
};

 echo"Conndection Successfull";

 $sql ="INSERT INTO student  ( name, email) VALUES ('Dev', "dev543@gmail.com")";
 
  if ($conn->query($sql)==TRUE){
    echo "New record inserted";
  }
else{
    echo"Error Insert". $conn->error;
};

 $conn->close();
?>
