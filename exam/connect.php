<?php
session_start(); 

$server_name="localhost";
$username="root";
$password="";
$database_name="slku";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['submit']))
{   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $registarId = $_POST['registarId'];
    $email = $_POST['email'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    $sql_query = "INSERT INTO Registration (firstName,lastName,registarId,email,semester,subject,comments) 
        VALUES ('$firstName','$lastName','$registarId','$email','$semester','$subject','$comments')";

    if (mysqli_query($conn, $sql_query)) 
    {
        
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['registarId'] = $registarId;
        $_SESSION['semester'] = $semester;
        
        
        header('location: user.php');
    } 
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
