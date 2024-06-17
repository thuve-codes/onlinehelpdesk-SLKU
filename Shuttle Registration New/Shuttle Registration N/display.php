<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="display.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuttle Registration Form</title>
</head>

<body>

    <div class="body">

        <header>
            SLKU SHUTTLE SERVICE
        </header>

        <br><br>


        <center>
            <h2> Submitted Details </h2>
        </center>

        <br>
        <div class="content">
            <?php

            session_start(); 

            require 'check.php';

            // Check if session variable for user ID is set
            if (isset($_SESSION['studentID'])) {
                
                $registarId = $_SESSION['studentID'];

                // Check database connection
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                $sql = "SELECT*FROM shuttle_s WHERE studentID = studentID ORDER BY ID DESC limit 1";
                $result = $con->query($sql);

                echo
                '<table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Pick-Up and Drop-off Location</th>
                    <th>Student ID</th>
                    <th>Center</th>
                    <th>First Name</th>
                    <th>Sur Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>';

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $ID = $row['ID'];
                        $Location = $row['Location'];
                        $studentID = $row['studentID'];
                        $centre = $row['centre'];
                        $firstName = $row['firstName'];
                        $surName = $row['surName'];
                        $email = $row['email'];
                        $phone = $row['phone'];

                        echo
                        '<tr>
                    <td>' . $ID . '</td>
                    <td>' . $Location . '</td>
                    <td>' . $studentID . '</td>
                    <td>' . $centre . '</td>
                    <td>' . $firstName . '</td>
                    <td>' . $surName . '</td>
                    <td>' . $email . '</td>
                    <td>' . $phone . '</td>
                    </tr>';
                    }


                    echo
                    '</tbody>
            </table>';

                    echo
                    '<div class="btnbox">
                   <button class="btn"><a href="shuttle.php">Confirm Registration</a></button>
                    <button class="btn"><a href="update.php">Update Details</a></button>
                    <button class="btn"><a href="delete.php">Delete Registration</a></button>
                    </div>';
                } else {
                    header('location: shuttle.php');
                }
                $con->close();
            } else {
                // header("Location: login.php");
                exit;
            }
            ?>
        </div>
        <br><br>

        <footer>
            <p>&copy; Sri Lanka Knowledge University<br> All Rights Reserved</p>
        </footer>

    </div>

</body>

</html>