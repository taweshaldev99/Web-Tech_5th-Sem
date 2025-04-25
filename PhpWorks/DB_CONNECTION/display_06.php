
<?php


$conn =new mysqli("localhost","root","","student_db");

if($conn-> connect_error){
    die("Connection error".$conn-> connect_error);
};

 echo"Conndection Successfull";

 $sql ="SELECT id, name, email FROM student WHERE  id =1";
 
$result = $conn-> query($sql);
print_r($result ->fetch_asscoc());

if($result-> num_rows >0){
    echo"<table>
    <tr>
       <th> sn </th>
       <th> name </th>
       <th> email </th>
    </tr>";

    while ($row = $result ->fetch_asscoc() ){
      //echo $row["name"]."<br>";
    echo "<tr>
              <td>".$row["id"]."</td>
              <td>".$row["name"]."</td>
              <td>".$row["email"]."</td>
          </tr>
          ";
    };
    
    
}

 $conn->close();
?>
