<?php
require 'configT.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $p_no = $_POST['p_no'];
    $faculty = $_POST['faculty'];
    $addno = $_POST['addno'];
    $dob = $_POST['dob'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO `student` (`email`, `p_no`, `faculty`, `pwd`, `addno`, `username`, `dob`) 
                VALUES ('$email', '$p_no', '$faculty', '$pwd', '$addno', '$username', '$dob')";

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href = 'logincrudT.php';</script>";
    } else {
        echo "Something went wrong: " . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../WebPagedocs 2/styles/creTcss.css">
    <script src="js/myjs.js"></script>
    <title>Create Account</title>
</head>

<body>
    <div class="container">
        <fieldset>
            <form method='post' onsubmit="return smepasword(event);">
                <legend>Create your Own Student Credential <br><br></legend>
                <div class="form-group">
                    <label>Enter your Student ID No:</label>
                    <input type="text" name="addno" placeholder="Enter your student ID Number" class="addno" required><br>

                    <label>Enter Your username:</label>
                    <input type="text" name="username" class="un" placeholder="Enter username" required> <br>

                    <label>Enter your email: </label>
                    <input type="email" name="email" class="mail" placeholder="Enter email" required><br>

                    <label>Enter your Mobile number:</label>
                    <input type="tel" pattern="[0-9]{10}" name="p_no" class="pno" placeholder="Enter Mobile Number"><br>

                    <label>Enter your faculty:</label>
                    <select name="faculty" class="faculty">
                        <option value="" selected disabled>Select your Faculty</option>
                        <option value="Computing">Faculty of Computing</option>
                        <option value="Architecture">Faculty of Architecture</option>
                        <option value="Business">Faculty of Business</option>
                        <option value="Engineering">Faculty of Engineering</option>
                    </select><br>

                    <label>Enter your Date of Birth:</label>
                    <input type="date" name="dob" class="date">
                    <br>

                    <label>Enter your New password:*(your password must contain more than 8 characters) (Eg:RiyaK@1001 )
                    </label> <br>
                    <input type='password' class="pwd" name="pwd" id='npd' required> </label><br>
                    <label>Re enter your New password: <br><input type='password' name="pwd" class="pwd" id='rnpd' required>
                    </label>

                    <input type="submit" class="btnprimary" name="submit" value="Register">
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>