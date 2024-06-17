<!DOCTYPE html>
<html>

<head>
    <title>Delete Profile</title>
</head>

<body>
    <?php
    require 'configT.php';
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $email = $_GET['email'];

    $sql = "DELETE FROM student WHERE email='$email'";
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully. Register again to login.');</script>";
        header('Location: logincrudT.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
    ?>
</body>

</html>