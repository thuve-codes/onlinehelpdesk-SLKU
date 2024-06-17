<!DOCTYPE html>
<html> 
    <head> </head>
 <body>
       <?php 
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "slku";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         //Connection Check
         if($conn->connect_error){
         die("connection failed: " . $conn->connect_error);
        }
          //Delete data from database
          $sql = "DELETE FROM ticket ORDER BY id DESC LIMIT 1"; 
           $conn->query($sql);

          if($conn->query($sql) === true){
          header('Location: ticket.php');
          } else {
          echo "error: " . $conn->error;
          }
          $conn->close();
          
        ?>

</body>
</html> 