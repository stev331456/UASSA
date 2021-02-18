<?php
$servername = "172.17.0.2";
$username = "root";
$password = "coba123";
$dbname = "trucorp-web-2.0";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
        die("Connection Failed". $conn->connect_error);        
}
$sql ="SELECT = FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            $count++;
            echo "id: " .$row["id"],"<br> - Name:  ". $row["nama"]. "<br> kantor " .$row["kantor$"]. "<br> <br>";
        echo "jumlah user dalam database adalah : " . $count++;    
        }  else{
            echo "no results ";
       
        } 
       
        $conn->close();
}