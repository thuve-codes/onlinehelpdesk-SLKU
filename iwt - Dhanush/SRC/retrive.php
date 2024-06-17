<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slku";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name,email,idnum,faculty,center,inquiry,subject,message FROM ticket ORDER BY id Desc limit 1";
$result = $conn->query($sql);

if($result->num_rows>0){
    echo"<table border='1'>";
    echo"<table><tr><th>Name</th><th>Email</th>
    <th>Idnum</th><th>Faculty</th><th>Center</th>
    <th>Inquiry</th><th>Subject</th><th>Message</th></tr>";
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["idnum"]."</td><td>".$row["faculty"]."</td><td>".$row["center"]."</td><td>"
        .$row["inquiry"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo"</table>"; 

    
}
else{
    echo"0 results";
    }    
    $conn->close();

?>