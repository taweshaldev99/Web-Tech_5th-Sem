<?php

$conn =new mysqli("localhost","root","","student_db");

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
};

 echo"Conndection Successfull";

 $sql ="UPDATE student  SET email="sujal@gmail.com" Where id="3";
 
  if ($conn->query($sql)==TRUE){
    echo "New record updated";
  }
else{
    echo"Error Insert". $conn->error;
};

 $conn->close();
?>
