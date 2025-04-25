<?php

$conn =new mysqli("localhost","root","","student_db");

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
};

 echo"Conndection Successfull";

 $sql ="DELETE FROM student WHERE id = 3";
 
  if ($conn->query($sql)==TRUE){
    echo "record deleted";
  }
else{
    echo"Error Insert".$conn->error;
};

 $conn->close();
?>
