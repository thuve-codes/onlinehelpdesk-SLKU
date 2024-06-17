<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="edit.css">
   
    <script src="../detials/details.js"></script>
  

</head>
<body>

    <?php
   
    require 'retrive.php';
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM registration ORDER BY Id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $stmt->close();
} 

   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
            
            <div class="main-div">
                <div class="registar-form">
                    <div class="form-heading">
                        <h2>Exam update form</h2>
                    </div>
                    <div class="input-fields">
                        <div class="half-width">
                        
                            <input required type="text" placeholder="First name" name="firstName" value="<?php echo $row['firstName']; ?>" />
                        </div>

                        <div class="half-width">
                        
                            <input required type="text" placeholder="Last name" name="lastName" value="<?php echo $row['lastName']; ?>" />
                        </div>

                        <div class="full-width">
                         
                            <input required type="text" placeholder="Student registration number" name="registarId" value="<?php echo $row['registarId']; ?>" />
                        </div>

                        <div class="full-width">
                           
                            <input required type="email" placeholder="Email address" name="email" value="<?php echo $row['email']; ?>" />
                        </div>

                        <div class="option-div">
                     
                     
       <select name="semester">
        <option value="">Select the year</option>
        <option value="1st year 1st semester"<?php if ($row['semester'] == '1st year 1st semester') echo ' selected'; ?>>1st year 1st semester</option>
        <option value="1st year 2nd semester"<?php if ($row['semester'] == '1st year 2nd semester') echo ' selected'; ?>>1st year 2nd semester</option>
        <option value="2nd year 1st semester"<?php if ($row['semester'] == '2nd year 1st semester') echo ' selected'; ?>>2nd year 1st semester</option>
        <option value="2nd year 2nd semester"<?php if ($row['semester'] == '2nd year 2nd semester') echo ' selected'; ?>>2nd year 2nd semester</option>
        <option value="3rd year 1st semester"<?php if ($row['semester'] == '3rd year 1st semester') echo ' selected'; ?>>3rd year 1st semester</option>
        <option value="3rd year 2nd semester"<?php if ($row['semester'] == '3rd year 2nd semester') echo ' selected'; ?>>3rd year 2nd semester</option>
        <option value="4th year 1st semester"<?php if ($row['semester'] == '4th year 1st semester') echo ' selected'; ?>>4th year 1st semester</option>
        <option value="4th year 2nd semester"<?php if ($row['semester'] == '4th year 2nd semester') echo ' selected'; ?>>4th year 2nd semester</option>
    </select>
                  </div>

                  <div class="full-width">
                     <input  required type="text" placeholder="Enter your subject name " name="subject" value="<?php echo $row['subject']; ?>" />
                  </div>
                        <div class="comments">
                           
                            <input type="text" placeholder="Enter your comments" name="comments" value="<?php echo $row['comments']; ?>" />
                        </div>

                        <div id="button">
                        <button class="update" type="submit" name="update">Update</button>
                      </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
    } else {
        echo "0 results";
    }

   
    $conn->close();
    ?>
      
</body>
</html>
