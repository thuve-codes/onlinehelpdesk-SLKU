<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slku";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get form data
    $idnum = $_POST['idnum'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $center = $_POST['center'];
    $inquiry = $_POST['inquiry'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare SQL update statement using prepared statement
    $sql = "UPDATE ticket 
            SET name=?, email=?, faculty=?, center=?, inquiry=?, subject=?, message=?
            WHERE idnum=?";
    
    $stmt = $connection->prepare($sql);
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssssssss", $name, $email, $faculty, $center, $inquiry, $subject, $message, $idnum);

        // Execute the statement
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                //echo "Records are updated successfully.";
               
              header('Location: ticket.php');
                exit; 
            } else {
                echo "No records were updated.";
            }
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        // Close prepared statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }
}

// Close database connection
$connection->close();
?>