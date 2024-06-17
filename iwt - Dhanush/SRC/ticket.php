<?php


$connection = new mysqli("localhost", "root", "", "slku");

if ($connection ->connect_error) {
    die("Connection failed: " . $connection ->connect_error);
}

if(isset($_POST['submit']))
{   // Setting parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $idnum = $_POST['idnum'];
    $faculty = $_POST['faculty'];
    $center = $_POST['center'];
    $inquiry = $_POST['inquiry'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


$sql = "INSERT INTO ticket (name,email,idnum,faculty,center,inquiry,subject,message) 
        VALUES ('$name','$email','$idnum','$faculty','$center','$inquiry','$subject','$message')";

$result = $connection->query($sql);

if($result){
    echo '<script>location.replace("retrive.php")</script>';
}
else{
echo "Error:".$connection->error;
}

session_start();
$_SESSION['name']=$name;
}

$connection->close();

?>

<!DOCTYPE html>
<html>
    <!--head section-->
    <head>
        <title>Ticket Raising</title>
        <link rel="icon" href="images/Logo.png">
        <link rel="stylesheet" href="styles\styleTicket.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <script src="js/ticket.j"></script>
    </head>
    <!--body section-->
    <body >
        <script>
            alert("Welcome to Ticket Page");

            function showMessage()
            {
                alert("Your form has been submitted..");
            }

        </script>
        <header>
        <img src="images/Logo.png" height="150px" width="150px" class="logo" >
         <h1 class="title">Sri Lanka Knowledge University</h1>
         
             <hr>
             
            <br>
            <div >
                <div class="formimage" id="myForm">
                    <center>
                        <img src="images\bg1.jpg" height="200px" width="350px" class="topimg">
                        <img src="images\bg3.jpg" height="200px" width="350px" class="topimg">
                        <img src="images\bg4.jpg" height="200px" width="350px" class="topimg"> 
                    </center>             
                    </div>
                    
                    <center>
                   
                    </div>
                    </center> 
                    <br>
                        <div id="searchResults"></div>
                        <!--Adding an image to view response-->
                       
                <fieldset class="field"> 
                    <legend id="legend"><h2>Ticket Raising Form<br></h2></legend>
                   
                    <!--Creating form-->
              
              <div class="formContent">
                <form id="ticketform" action="submit.php" method="post">
                   <table><tr>
                      <ul type="square">
                        <div id="ticket">
                            <a href="Mytickets.php"><img src="images/ticket icon.jpg"  height="100px" width="185px" id="iconId"></a>   
                        </div>  
                        <li><h2 class="tbheading"><b>Name</b></h2></li>
                            <input type="text" placeholder="Enter Name" size="60%" class="tbinput" id="name" name="name" required>    
                        <li><h2 class="tbheading"><b>Email Address</b></h2></li>
                            <input type="text" placeholder="Enter Email Address ex:va*****12@gmail.com" size="60%" class="tbinput" id="email"  name="email" required>
                        <li><h2 class="tbheading"><b>Student Id</b></h2></li>
                            <input type="text" placeholder="ITxxxxxxxx" size="60%"  class="tbinput" id="idnum"  name="idnum" required>
                        <li><h2 class="tbheading"><b>Faculty of Study</b></h2></li>
                            <select  class="tbinput" id="faculty"  name="faculty" required>
                                <option name="faculty">Faculty of Computing</option>
                                <option name="faculty">Faculty of Engineering</option>
                                <option name="faculty">Faculty of Medicine</option>    
                                <option name="faculty">Faculty of Business</option>
                                <option name="faculty">Faculty of Architecture</option>
                                <option name="faculty">Faculty of Human Resources and Science</option>
                                <option name="faculty">Faculty of Art</option>    
                            </select>
                        <li><h2 class="tbheading"><b>Center</b></h2></li>
                            <select  class="tbinput" id="center"  name="center" required>
                                <option name="center">Kollupitiya</option>
                                <option name="center">Nuwara-Eliya</option>
                                <option name="center">Jaffna</option>    
                                <option name="center">Kilinochi</option>
                                <option name="center">Malabe</option>
                                <option name="center">Galle</option>
                                <option name="center">Trincomalee</option>    
                            </select>
                        <li><h2 class="tbheading"><b>Inquiry type</b></h2></li>
                            <select  class="tbinput" id="inquiry"  name="inquiry" required>
                                <option name="inquiry">Semester Registration</option>
                                <option name="inquiry">Exam Registration</option>
                                <option name="inquiry">Transfer Group</option>    
                                <option name="inquiry">Complaints</option>
                                <option name="inquiry">Other</option>
                            </select>     
                
                        <li><h2 class="tbheading"><b>Subject</b></h2></li>
                            <input type="text" place holder="ex:Regarding Group Transferring" size="60%"  class="tbinput" id="subject" name="subject" required>
                        <li><h2 class="tbheading"><b>Message</b></h2></li>
                            <textarea cols="80" rows="10" placeholder="Describe about the problem" class="tbinput" id=message  name="message" required></textarea  >
                       
                        <br><br>
                        <button type="submit" value="submit" class="btn" name="submit"  onclick="showMessage()" value="submit" id="submit">Submit</button>
                       
                </ul>
                </tr>
                </table>
               </form>
            </div> 
            </fieldset>   
            </div>    
           
            <hr>
            
    </body>
</html>