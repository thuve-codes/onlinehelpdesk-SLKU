<?php
session_start();
require 'configT.php';

if (isset($_SESSION["email"])) { //Whenn it not null true 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $p_no = $_POST["p_no"];
    $faculty = $_POST["faculty"];
    $dob = $_POST["dob"];
    $addno = $_POST["addno"];
    $id = $_POST["id"];

    $sql = "UPDATE student SET username='$username', p_no='$p_no', faculty='$faculty', dob='$dob' WHERE email='$email'";
    if ($con->query($sql) === TRUE) {
      echo "Profile updated successfully";
      header('Location: retrievecrudT.php');
      exit();
    } else {
      echo "Error updating profile: " . $con->error;
    }
  }
  $email = $_SESSION["email"];
  $sql = "SELECT * FROM student WHERE email = '$email'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

    <!DOCTYPE html>

    <html>

    <head>
      <title>Edit your Profile</title>
      <link rel="stylesheet" href="../WebPagedocs 2/styles/updatecrudTcss.css">

      <style>
        /*footer*/

        .footer {
          background-color: #111;

        }

        footer {
          padding-left: 0%;
        }

        .footerContainer {
          display: inline;
        }

        .socialIcons {
          display: flex;
          justify-content: center;
          padding: 5px;
        }

        .socialIcons a {
          text-decoration: none;
          padding: 10px;
          background-color: white;
          margin: 10px;
          border-radius: 50%;
        }

        .socialIcons a i {
          font-size: 2em;
          color: black;
          opacity: 0.9;
        }

        .socialIcons a:hover {
          background-color: black;
          transition: 0.5s;
        }

        .socialIcons a:hover i {
          color: chartreuse;
          transition: 0.5s;
        }

        .Nav {
          margin: 30px 0;
        }

        .Nav ul {
          display: flex;
          justify-content: center;
          list-style-type: none;
        }

        .Nav ul li a {
          color: white;
          font-weight: bold;
          margin: 20px;
          text-decoration: none;
          font-size: 1.3em;
          opacity: 0.7;
          transition: 0.5s;
        }

        .Nav ul li a:hover {
          opacity: 1;
        }

        .fimage1 {
          height: 15%;
          width: 25%;
          position: relative;
        }

        .fimage2 {
          height: 30%;
          width: 40%;
          position: relative;
          float: right;
        }

        .footerBottom {
          background-color: black;
          padding: 20px;
          text-align: center;
          color: white;
        }



        /* Header */

        #nav {
          display: flex;
          border: hidden;
          height: 90px;
          background-color: #ddd3d3;
          border-bottom-left-radius: 20px;
          border-bottom-right-radius: 20px;
          padding: 0;
          margin: 0;
          transform: translateY(-100px);
          padding: 0%;
        }

        #nave-name {
          display: flex;
          font-size: 20px;
          color: black;
          padding-top: 20px;
          width: 100%;
          padding-left: 32%;
        }

        #nave-image {
          width: 50px;
          height: 70px;
          display: flex;
          z-index: 1;
        }

        #nave-name :hover {
          color: #645b5bce;
        }

        .SLKU {
          align-items: center;
          display: flex;
        }

        ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        ul,
        li {
          display: inline-block;
          position: relative;
        }


        .drop-down {
          display: none;
          position: absolute;
          background-color: #fff;
          min-width: 200px;
          box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

          color: #000;
        }

        .drop-down li {
          display: block;
        }

        .drop-down li a {
          color: #000;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          font-weight: lighter;
        }


        li:hover .drop-down {
          display: block;
        }

        a {
          text-decoration: none;
          color: #000;
        }

        .home {
          padding-left: 44px;
          font-weight: bolder;
        }


        .drop-down li:hover a {
          background-color: #f0f0f0;
        }

        #up {
          color: white;
          background-color: rgba(24, 24, 121, 0.63);
          border: hidden;
          margin-right: 2%;

          margin-top: 15px;
          margin-bottom: 15px;

          border-radius: 8px;
        }

        .uprof {
          width: 20px;

        }

        button:hover {
          background-color: #d9fd0a;

        }

        button {
          width: 180px;
        }
      </style>
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


      <h1>Update your Profile</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <p>Addmission No: (Can't change, Any concerns? Contact Administration)</p>
        <input type="text" name="addno" value="<?php echo $row['addno']; ?>" class="txt" readonly><br>
        <p>Email Address: (Can't change, Any concerns? Contact Administration)</p>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" readonly class="mail"><br><br><br>
        <p>User Name : </p>
        <input type="text" name="username" value="<?php echo $row['username']; ?> " class="name"><br>
        <p>Phone Number: </p>
        <input type="number" name="p_no" value="<?php echo $row['p_no']; ?>" class="pno"><br>


        <p>Faculty: </p>
        <select name="faculty" class="faculty">
          <option value="" <?php if ($row['faculty'] == "") {
                              echo "selected";
                            } ?> disabled>Select your Faculty</option>
          <option value="Computing" <?php if ($row['faculty'] == "Computing") {
                                      echo "selected";
                                    } ?>>Faculty of Computing</option>
          <option value="Architecture" <?php if ($row['faculty'] == "Architecture") {
                                          echo "selected";
                                        } ?>>Faculty of Architecture</option>
          <option value="Business" <?php if ($row['faculty'] == "Business") {
                                      echo "selected";
                                    } ?>>Faculty of Business</option>
          <option value="Engineering" <?php if ($row['faculty'] == "Engineering") {
                                        echo "selected";
                                      } ?>>Faculty of Engineering</option>
        </select><br>


        <p>Date: </p>
        <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="dob"><br><br>
        <input type="submit" value="Update Profile" class="sub">
        <button><a href="deletecrudT.php?email=<?php echo $row['email']; ?>" class="del">Delete Profile</a></button>
      </form>

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

<?php
  }
} else {
  header('Location: logincrudT.php');
  exit();
}
?>