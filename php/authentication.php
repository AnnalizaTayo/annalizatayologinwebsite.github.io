<?php
    session_start();
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  

        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = md5(mysqli_real_escape_string($con, $password));  
      
        $sql = "SELECT * from logindb where email = '$email'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);
        
        if($count == 1){
            if($row["password"] == $password){
                $_SESSION['id'] = $row["id"];
                $_SESSION['name'] = $row["name"];
                header('Location: ../php/home.php');
            } else{
                ?>
                <script type="text/javascript">
                alert("Incorrect password please try again.");
                window.location.href = "../index.html";               
                </script>
                <?php
            }
        }
        else{
            ?>
            <script type="text/javascript">
            alert("The email you entered isn’t connected to an account. Please signup.");
            window.location.href = "../index.html";
            </script>
            <?php
        }     
        // Close connection
        mysqli_close($con);
?>