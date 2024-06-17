<?php

require 'retrive.php';


echo "Request method: " . $_SERVER["REQUEST_METHOD"];



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted successfully.";

   
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $registarId = $_POST['registarId'];
    $email = $_POST['email']; 
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    
    echo "<pre>";
    print_r($_POST);
    

    
    $sql = "UPDATE registration 
            SET firstName=?, lastName=?, registarId=?, email=?, `semester`=?, `subject`=?, comments=?
            WHERE Id = ?";

  
   

  
    $stmt = $conn->prepare($sql);

    
    if ($stmt) {
       
        $stmt->bind_param("ssissssi", $firstName, $lastName, $registarId, $email, $semester, $subject, $comments, $id);

        
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Record updated successfully.";
            } else {
                echo "No records were updated.";
            }
        } else {
            echo "Error executing statement: ";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}


$conn->close();
?>
