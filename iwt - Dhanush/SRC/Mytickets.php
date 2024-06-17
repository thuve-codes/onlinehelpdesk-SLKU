<!DOCTYPE html>
<html>
    <!--head section-->
    <head>
        <title>My Tickets</title>
        <link rel="icon" href="images/Logo.png">
        <link rel="stylesheet" href="styles\Mytickets.css">
        <script src="js/Myticket.js"></script>
    </head>
    <!--body section-->
    <body >
        

        <header>
        <img src="images/Logo.png" height="150px" width="150px" class="logo" >
        <center> <h1 class="title">Sri Lanka Knowledge University</h1></center>
         
             <hr>
            
            <br>
            <fieldset class="field">
                <legend id="legend"><h2>My Tickets</h2></legend>
                <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "slku";   
                
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT name,email,idnum,faculty,center,inquiry,subject,message FROM Ticket ORDER BY id Desc limit 1";
            $result = $conn->query($sql);
               
                
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    echo "<h2>Final Registration Details</h2>";                 
                    echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";              
                    echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
                    echo "<p><strong>ID Number:</strong> " . $row['idnum'] . "</p>";
                    echo "<p><strong>Faculty:</strong> " . $row['faculty'] . "</p>";
                    echo "<p><strong>Center:</strong> " . $row['center'] . "</p>";
                    echo "<p><strong>Inquiry About:</strong> " . $row['inquiry'] . "</p>";
                    echo "<p><strong>Subject:</strong> " . $row['subject'] . "</p>";
                    echo "<p><strong>Message:</strong> " . $row['message'] . "</p>";
                    echo"<div id='button'>
                  <button class='btn'><a href='ticketedit.php'>Edit</a></button>
                  <button class='btn'><a href='delete.php'>Delete</a></button>
                    </div>";

                    }
                } else {
                    // echo "0 results";
                    header('location: Ticket.php');
                 }
             
                 // Close the database connection
                 $conn->close();
            
             ?>
                <br>
            </fieldset>
            <hr>
    </body>
</html>