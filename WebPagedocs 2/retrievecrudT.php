<!DOCTYPE html>
<html>

<head>
  <title>Update Profile</title>
  <link rel="icon" href="images/update-profile-user.png">
  <link rel="stylesheet" href="styles/styleretrieve.css">

  <script src="js/myjs.js"></script>
</head>

<body>
  <header>
    <nav id="nav">
      <div id="nave-image">
        <img src="../WebPagedocs 2/images/SLKU LOGO.png" alt="logo">

        <div class="SLKU">
          <h3>SLKU</h3>
        </div>
      </div>
      <div id="nave-name">
        <ul>
          <li class="home"><a href="#">Home</a></li>
          <li class="home"><a href="#">Services</a>
            <ul class="drop-down">
              <li><a href="../iwt - Dhanush/SRC/ticket.php">Ticket-registration</a></li>
              <li><a href="../exam/exam.html">Exam-registration</a></li>
              <li><a href="../Shuttle Registration New/Shuttle Registration N/shuttle.php">shuttle registration</a></li>
            </ul>
          </li>
          <li class="home"><a href="../iwt - Dhanush/StudentLife.html">StudentLife</a></li>
          <li class="home"><a href="../About Us/about us.html">AboutUs</a></li>
        </ul>

      </div>

      <button id="up">
        <div class="upp"> <img src="../WebPagedocs 2/images/up.png" class="uprof"><br> Update Profile
      </button>


    </nav>
  </header>

  <?php
  session_start();
  require 'configT.php';

  if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM student WHERE email = '$email'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();



      echo "<center><br><div id='f'> <fieldset class='fldst'> <form method='post'>";
      echo "<input type='hidden' name='email' value= " . $row["email"] . "readonly>";
      echo "<legend>User Details <br><br></legend>";
      echo "<label>Admission Number: " . $row["addno"] . "<br><br><br></label> ";
      echo "<label>User Name : " . $row["username"] . "<br><br><br></label> ";
      echo "<label>Email : " . $row["email"] . "<br><br><br></label> ";

      echo "<label>Faculty : " . $row["faculty"] . "<br><br><br></label> ";
      echo "<label>Phone Number: " . $row["p_no"] . "<br><br><br></label> ";
      echo "<label>Dte of Birth: " . $row["dob"] . "<br><br><br></label> ";

      echo "<button type='submit'><a href='updatecrudT.php'> To Make Changes, Click Here </a></button>";
      echo "</form></fieldset> </div><center>";
    }
  } else {
    header('Location: logincrudT.php');
    exit();
  }
  ?>

  <footer>
    <div class="footer">
      <div class="footerContainer">
        <div class="socialIcons">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="Nav">
          <ul>
            <li><a href="../home/main.html">Home</a></li>
            <li><a href="../iwt - Dhanush/StudentLife.html">Student Life</a></li>
            <li><a href="../About Us/about us.html">About Us</a></li>
          </ul>
        </div>

      </div>
      <div class="footerBottom">
        <p>
          Copyright &copy;2024 <br> Designed by MLB_06.02.11
        </p>
      </div>
      <!--<a href=""><img src="Calendar fn.png" class="fimage2"></a>-->

    </div>
  </footer>
</body>

</html>