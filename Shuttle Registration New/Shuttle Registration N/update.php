<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="shuttle.css">
    <script src="shuttle.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuttle shuttle_s Form</title>
</head>

<body>
    <?php

    require 'check.php';

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT*FROM shuttle_s WHERE studentID = studentID ORDER BY ID DESC limit 1";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

        <header>
            Shuttle Service for SLKU Students
        </header>

        <br><br>

        <form id="shuttle_sForm" action="update_c.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
            <center>
                <h2> shuttle_s Form </h2>
            </center>

            <br>

            <h3>Shuttle Timetable</h3>

            <table>
                <thead>
                    <tr>
                        <th>Departure Time</th>
                        <th>Starting Location</th>
                        <th>End Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>07:00 AM</td>
                        <td>Colpetty</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>07:30 AM</td>
                        <td>Colombo 7</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>07:30 AM</td>
                        <td>Kaduwela</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>06:30 AM</td>
                        <td>Ja-Ela</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>06:30 AM</td>
                        <td>Gampaha</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>06:30 AM</td>
                        <td>Pettah</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>07:30 AM</td>
                        <td>Rajagiriya</td>
                        <td>Malabe Center</td>
                    </tr>
                    <tr>
                        <td>05:30 AM</td>
                        <td>Vavuniya</td>
                        <td>Jaffna Center</td>
                    </tr>
                    <tr>
                        <td>07:00 AM</td>
                        <td>Point Pedro</td>
                        <td>Jaffna Center</td>
                    </tr>
                    <tr>
                        <td>06:00 AM</td>
                        <td>Mannar</td>
                        <td>Jaffna Center</td>
                    </tr>
                    <tr>
                        <td>05:00 AM</td>
                        <td>Badulla</td>
                        <td>Kandy Center</td>
                    </tr>
                    <tr>
                        <td>06:00 AM</td>
                        <td>Hatton</td>
                        <td>Kandy Center</td>
                    </tr>
                    <tr>
                        <td>06:00 AM</td>
                        <td>Anuradhapura</td>
                        <td>Kurunegala Center</td>
                    </tr>
                    <tr>
                        <td>07:00 AM</td>
                        <td>Ragama</td>
                        <td>Kurunegala Center</td>
                    </tr>
                </tbody>
            </table>

            <br><br>

            <h3>Pick-Up and Drop-off Location</h3>

            <label for="Location">Please select your location</label>
            <select id="Location" name="Location" required value=<?php echo $row['Id']; ?>>
                <option value="" disabled selected>Location</option>
                <option value="Colpetty">Colpetty</option>
                <option value="Colombo 7">Colombo 7</option>
                <option value="Kaduwela">Kaduwela</option>
                <option value="Ja-Ela">Ja-Ela</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Pettah">Pettah</option>
                <option value="Rajagiriya">Rajagiriya</option>
                <option value="Vavuniya">Vavuniya</option>
                <option value="Point Pedro">Point Pedro</option>
                <option value="Mannar">Mannar</option>
                <option value="Badulla">Badulla</option>
                <option value="Hatton">Hatton</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Ragama">Ragama</option>
            </select><br><br>

            <h3>Student ID</h3>

            <label for="studentID">Enter Your Student ID</label>
            <input type="text" size="10" id="studentID" name="studentID" required placeholder="Eg: IT23XXXXXX" value=<?php echo $row['studentID']; ?>><br><br>

            <h3>Center</h3>

            <label for="centre">Please select your center</label>
            <select id="centre" name="centre" required value=<?php echo $row['centre']; ?>>
                <option value="" disabled selected>Center</option>
                <option value="Malabe">Malabe</option>
                <option value="Jaffna Center">Jaffna Center</option>
                <option value="Kandy">Kandy</option>
                <option value="Kurunegala">Kurunegala</option>
            </select><br><br>

            <h3>Name</h3>

            <label for="firstName">First Name</label>
            <input type="text" size="15" id="firstName" name="firstName" required placeholder="Eg: Jude" value=<?php echo $row['firstName']; ?>><br><br>

            <label for="surName">Sur Name</label>
            <input type="text" size="15" id="surName" name="surName" required placeholder="Eg: Bellingan" value=<?php echo $row['surName']; ?>><br><br>

            <h3>Email Address</h3>

            <label for="email">Enter Your Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Eg: IT23XXXXXX@my.slku.lk" value=<?php echo $row['email']; ?>><br><br>

            <h3>Phone Number</h3>

            <label for="phone">Enter Your Phone Number</label>
            <input type="tel" id="phone" name="phone" required placeholder="Eg: +947XXXXXX" value=<?php echo $row['phone']; ?>><br><br>

            <center>
                <input type="submit" id="submit" name="submit" value="Update">
                <input type="reset" id="reset" value="Reset">
            </center>

        </form>
    <?php
    } else {
        echo "0 results";
    }

    $con->close();
    ?>

    <br><br>

    <footer>
        <p>&copy; Sri Lanka Knowledge University<br> All Rights Reserved</p>
    </footer>

</body>

</html>