<!DOCTYPE html>
<html> 
    <head> </head>
 <body>
       <?php 
        require 'retrive.php';
         
         if($conn->connect_error){
         die("connection failed: " . $conn->connect_error);
        }
          
          $sql = "DELETE FROM registration ORDER BY Id DESC LIMIT 1"; 
           $conn->query($sql);

          if($conn->query($sql) === true){
          echo "record deleted successfully";
          } else {
          echo "error: " . $conn->error;
          }
          $conn->close();
          
        ?>

</body>
</html>
