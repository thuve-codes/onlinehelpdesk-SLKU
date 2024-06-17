<?php
session_start();

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "slku";

$con = mysqli_connect($server_name, $username, $password, $database_name);

if (!$con) {
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $Location = $_POST['Location'];
    $studentID = $_POST['studentID'];
    $centre = $_POST['centre'];
    $firstName = $_POST['firstName'];
    $surName = $_POST['surName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql_query = "INSERT INTO shuttle_s (Location,studentID,centre,firstName,surName,email,phone)
    VALUES('$Location','$studentID','$centre','$firstName','$surName','$email','$phone')";

    if (mysqli_query($con, $sql_query)) {

        $_SESSION['Location'] = $Location;
        $_SESSION['studentID'] = $studentID;
        $_SESSION['centre'] = $centre;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['surName'] = $surName;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;

        header('location: display.php');
    } else {
        echo "Error: " . $sql . "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="shuttle.css">
   <!-- <script src="shuttle.js"></script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuttle Registration Form</title>
</head>

<body>

    <header>
        SLKU SHUTTLE SERVICE
    </header>

    <br><br>

    <form id="registrationForm" method="post">
        <center>
            <h2> Registration Form </h2>
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
        <select id="Location" name="Location" required>
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
        <input type="text" size="10" id="studentID" name="studentID" required placeholder="Eg: IT23XXXXXX"><br><br>

        <h3>Center</h3>

        <label for="centre">Please select your center</label>
        <select id="centre" name="centre" required>
            <option value="" disabled selected>Center</option>
            <option value="Malabe">Malabe</option>
            <option value="Jaffna Center">Jaffna Center</option>
            <option value="Kandy">Kandy</option>
            <option value="Kurunegala">Kurunegala</option>
        </select><br><br>

        <h3>Name</h3>

        <label for="firstName">First Name</label>
        <input type="text" size="15" id="firstName" name="firstName" required placeholder="Eg: Jude"><br><br>

        <label for="surName">Sur Name</label>
        <input type="text" size="15" id="surName" name="surName" required placeholder="Eg: Bellingan"><br><br>

        <h3>Email Address</h3>

        <label for="email">Enter Your Email Address</label>
        <input type="email" id="email" name="email" required placeholder="Eg: IT23XXXXXX@my.slku.lk"><br><br>

        <h3>Phone Number</h3>

        <label for="phone">Enter Your Phone Number</label>
        <input type="tel" id="phone" name="phone" required placeholder="Eg: +947XXXXXX"><br><br>

        <center>
            <input type="submit" id="submit" name="submit" value="Submit">
            <input type="reset" id="reset" value="Reset">
        </center>

    </form>

    <br><br>

    <footer>
        <p>&copy; Sri Lanka Knowledge University<br> All Rights Reserved</p>
    </footer>

</body>

</html>