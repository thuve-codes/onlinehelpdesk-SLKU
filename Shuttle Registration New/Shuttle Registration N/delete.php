<?php
include 'check.php';

$sql = "DELETE FROM shuttle_s WHERE studentID = studentID ORDER BY ID DESC limit 1";

$result = mysqli_query($con, $sql);

if ($result) {
    header('location: shuttle.php');
} else {
    die(mysqli_error($con));
}
