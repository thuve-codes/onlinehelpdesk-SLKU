<?php
session_start();
require 'configT.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT pwd FROM student WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row["pwd"]) {
            $_SESSION["email"] = $email;
        
            header("Location: ../home/main.html");
            exit(); 
        } else {
            echo '<script> alert("Please Enter Correct Password!!") </script>';
        }
    } else {
        echo '<script> alert("Your Email address and Password are incorrect!!") </script>';
    }
}

$con->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="icon" href="images/Loginico.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/stylelogin.css">
    <link rel="import" href="navbar.html">
    <script src="js/myjs.js"></script>
</head>

<body>
    <h1 class="greeting">WELCOME TO SLKU STUDENT SUPPORT DESK</h1>

    <fieldset class="form-section">
        <center>
            <legend>Sign In</legend>
        </center>
        <form method="post" class="formc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <img src="images/userIcon.png" alt="User Icon" class="imusericon"><br>
            <label>Email:</label><br>
            <input type="email" class="email" name="email" placeholder="Enter your email"><br><br>
            <label>Password:</label><br>
            <input type="password" class="password" name="password" placeholder="Enter your password"><br><br>
            <button class="frgtpswd" id="forgotPasswordBtn"><a href="createaccT.php" t>Create new user credentials</a></button><br><br>
            <center>
                <button type="submit" class="submit">
                <img src="images/lock.svg" class="lockimg"> Login
                </button>
            </center>
        </form>
    </fieldset>

</body>

</html>