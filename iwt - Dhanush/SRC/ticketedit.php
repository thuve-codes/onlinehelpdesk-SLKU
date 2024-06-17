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
    <body>

        <header>
            <img src="images/Logo.png" height="150px" width="150px" class="logo" >
            <h1 class="title">Sri Lanka Knowledge University</h1>
         
            <hr>
             
            <br>
            <div>
                <div class="formimage" id="myForm">
                    <center>
                        <img src="images\bg1.jpg" height="200px" width="350px" class="topimg">
                        <img src="images\bg3.jpg" height="200px" width="350px" class="topimg">
                        <img src="images\bg4.jpg" height="200px" width="350px" class="topimg"> 
                    </center>             
                </div>
                    
                <center>
                   
                </center> 
                <br>
                <div id="searchResults"></div>
                <!--Adding an image to view response-->
            </div>
                    
            <fieldset class="field"> 
                <legend id="legend"><h2>Ticket Raising Form<br></h2></legend>
                   
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "slku";

                $connection = mysqli_connect($servername, $username, $password, $dbname);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM ticket ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);

                // Close database connection
                $connection->close();
                ?>
                <div class="formContent">
                    <form id="ticketform" action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['idnum']; ?>">
                        <table><tr>
                            <ul type="square">
                                <div id="ticket">
                                    <a href="Mytickets.html"><img src="images/ticket icon.jpg" height="100px" width="185px" id="iconId"></a>   
                                </div>  
                                <li><h2 class="tbheading"><b>Name</b></h2></li>
                                <input type="text" placeholder="Enter Name" size="60%" class="tbinput" id="name" name="name" required value="<?php echo $row['name']; ?>">    
                                <li><h2 class="tbheading"><b>Email Address</b></h2></li>
                                <input type="text" placeholder="Enter Email Address ex:va***12@gmail.com" size="60%" class="tbinput" id="email"  name="email" required value="<?php echo $row['email']; ?>">
                                <li><h2 class="tbheading"><b>Student Id</b></h2></li>
                                <input type="text" placeholder="ITxxxxxxxx" size="60%"  class="tbinput" id="idnum"  name="idnum" required value="<?php echo $row['idnum']; ?>">
                                <li><h2 class="tbheading"><b>Faculty of Study</b></h2></li>
                                <select class="tbinput" id="faculty" name="faculty" required>
                                    <option <?php if ($row['faculty'] == 'Faculty of Computing') echo 'selected'; ?>>Faculty of Computing</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Engineering') echo 'selected'; ?>>Faculty of Engineering</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Medicine') echo 'selected'; ?>>Faculty of Medicine</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Business') echo 'selected'; ?>>Faculty of Business</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Architecture') echo 'selected'; ?>>Faculty of Architecture</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Human Resources and Science') echo 'selected'; ?>>Faculty of Human Resources and Science</option>
                                    <option <?php if ($row['faculty'] == 'Faculty of Art') echo 'selected'; ?>>Faculty of Art</option>
                            
                                </select>
                                <li><h2 class="tbheading"><b>Center</b></h2></li>
                                <select class="tbinput" id="center" name="center" required>
                                    <option <?php if ($row['center'] == 'Kollupitiya') echo 'selected'; ?>>Kollupitiya</option>
                                    <option <?php if ($row['center'] == 'Nuwara-Eliya') echo 'selected'; ?>>Nuwara-Eliya</option>
                                    <option <?php if ($row['center'] == 'Jaffna') echo 'selected'; ?>>Jaffna</option>
                                    <option <?php if ($row['center'] == 'Kilinochi') echo 'selected'; ?>>Kilinochi</option>
                                    <option <?php if ($row['center'] == 'Malabe') echo 'selected'; ?>>Malabe</option>
                                    <option <?php if ($row['center'] == 'Galle') echo 'selected'; ?>>Galle</option>
                                    <option <?php if ($row['center'] == 'Trincomalee') echo 'selected'; ?>>Trincomalee</option>
                                
                                </select>
                                <li><h2 class="tbheading"><b>Inquiry type</b></h2></li>
                                <select class="tbinput" id="inquiry" name="inquiry" required>
                                    <option <?php if ($row['inquiry'] == 'Semester Registration') echo 'selected'; ?>>Semester Registration</option>
                                    <option <?php if ($row['inquiry'] == 'Exam Registration') echo 'selected'; ?>>Exam Registration</option>
                                    <option <?php if ($row['inquiry'] == 'Transfer Group') echo 'selected'; ?>>Transfer Group</option>
                                    <option <?php if ($row['inquiry'] == 'Complaints') echo 'selected'; ?>>Complaints</option>
                                    <option <?php if ($row['inquiry'] == 'Other') echo 'selected'; ?>>Other</option>
                                </select>     
                        
                                <li><h2 class="tbheading"><b>Subject</b></h2></li>
                                <input type="text" placeholder="ex:Regarding Group Transferring" size="60%"  class="tbinput" id="subject" name="subject" required value="<?php echo $row['subject']; ?>">
                                <li><h2 class="tbheading"><b>Message</b></h2></li>
                                <textarea cols="80" rows="10" placeholder="Describe about the problem" class="tbinput" id="message"  name="message" required><?php echo $row['message']; ?></textarea>
                        
                                <br><br>
                                <button type="submit" class="btn" name="submit">Update</button>
                            </ul>
                        </tr></table>
                    </form>
                </div> 
            </fieldset>   
        </div>    
           
        <hr>
    </body>
</html>