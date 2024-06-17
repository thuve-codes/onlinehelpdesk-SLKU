<?php 
  
  $connection = new mysqli("localhost", "root", "", "slku");

  if($connection->connect_error)
      {
          die("Connection failed:" .$connection->connect_error);
      }
  
    session_start();
    $name=$_SESSION['name'];


    $_SESSION['name']=$name;

?>

<!DOCTYPE html>
<html>
    <!--head section-->
    <head>
        <title>Success</title>
        <link rel="icon" href="images/Logo.png">
        <link rel="stylesheet" href="styles\Mytickets.css">
        
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

                <h1 >Registration Successful!</h2>
                <h3>Your registration has been successfully completed.</p>
        <div> 
             <button id="btn" onclick="window.location.href='Mytickets.php'">View <Details></Details></button>
        </div>
        </fieldset>
    <hr>
</body>
</html>