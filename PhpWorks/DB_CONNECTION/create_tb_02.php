
<?php
$host_name = "localhost";
$user_name = "root";
$passwrord = "";
$db_name = "student_db";

$conn =new mysqli($host_name,$user_name,$passwrord,$db_name);

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
};
 echo"Conndection Successfull";

 $sql ="CREATE TABLE student (
 id INT(11) AUTO_INCREMENT PRIMARY KEY ,
 name VARCHAR(25),
 email VARCHAR(25) UNIQUE
)";

 
  if ($conn->query($sql)==TRUE){
    echo "Table created successfully";
  }
else{
    echo"Error table create". $conn->error;
};

 $conn->close();
?>
