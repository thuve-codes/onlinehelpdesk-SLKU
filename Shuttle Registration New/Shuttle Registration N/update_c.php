<?php

require 'check.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted successfully.";

    $ID = $_POST['ID'];
    $Location = $_POST['Location'];
    $studentID = $_POST['studentID'];
    $centre = $_POST['centre'];
    $firstName = $_POST['firstName'];
    $surName = $_POST['surName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE shuttle_s SET Location=?, studentID=?, centre=?, firstName=?, `surName`=?, `email`=?, phone=? WHERE ID = ?";

    $stmt = $con->prepare($sql);

    if ($stmt)

        $stmt->bind_param("ssssssii", $Location, $studentID, $centre, $firstName, $surName, $email, $phone, $ID);


    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            header('location: shuttle.php');
        } else {
            die(mysqli_error($con));
        }
        $stmt->close();
    }
}

$con->close();

?>
