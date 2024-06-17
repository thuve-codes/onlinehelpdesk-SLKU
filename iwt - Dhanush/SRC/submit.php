<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$database = "exam";*/

$connection = new mysqli("localhost", "root", "", "slku");

if ($connection ->connect_error) {
    die("Connection failed: " . $connection ->connect_error);
}
 else 
{
    echo "Connected successfully";
}
if(isset($_POST['submit']))
{   // Setting parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $idnum = $_POST['idnum'];
    $faculty = $_POST['faculty'];
    $center = $_POST['center'];
    $inquiry = $_POST['inquiry'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


$sql = "INSERT INTO ticket (name,email,idnum,faculty,center,inquiry,subject,message) 
        VALUES ('$name','$email','$idnum','$faculty','$center','$inquiry','$subject','$message')";

$result = $connection->query($sql);

if($result){
    echo '<script>location.replace("Mytickets.php")</script>';
}
else{
echo "Error:".$connection->error;
}

session_start();
$_SESSION['name']=$name;
}

$connection->close();

?>