<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="details.css">
    
    <script src="details.js"></script>
</head>
<body>



<?php
session_start(); // Start the session

// Include the PHP file to establish database connection
require 'retrive.php';

// Check if session variable for user ID is set
if (isset($_SESSION['registarId'])) {
    // Retrieve user ID from session
    $registarId = $_SESSION['registarId'];

    // Check database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT * FROM registration WHERE registarId = '$registarId' ORDER BY Id DESC LIMIT 1"; 
    $result = $conn->query($sql);

    // Check if data exists
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display user's data
            echo "<div class='main-div'>";
            echo "<div class='registar-form'>";
            echo "<div class='form-heading'>";
            echo "<h2>Submitted form </h2>";
            echo "</div>";
            echo "<div class='input-fields'>";
            echo "<p class='half-width'>First Name: " . $row["firstName"] . "</p>";
            echo "<p class='half-width'>Last Name: " . $row["lastName"] . "</p>";
            echo "<p class='full-width'>Registration ID: " . $row["registarId"] . "</p>";
            echo "<p class='full-width'>Email: " . $row["email"] . "</p>";
            echo "<p class='full-width'>Option: " . $row["semester"] . "</p>";
            echo "<p class='full-width'>subject: " . $row["subject"] . "</p>";
            echo "<p class='comments'>Comments: " . $row["comments"] . "</p>";
          
            echo "<div id='button'>";
            echo "<button class='update' type='button' onclick='enableEdit()'><a href='edit.php'>Update</a></button>";
            echo "<button class='delete'><a href='delete.php'>Delete</a></button>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
       // echo "0 results";
       header('location: exam.html');
    }

    // Close the database connection
    $conn->close();
} else {
    // If user ID session variable is not set, redirect the user or display an error message
   // header("Location: login.php"); // Example: Redirect to login page
    exit;
}
?>
  
       
</body>
</html>
