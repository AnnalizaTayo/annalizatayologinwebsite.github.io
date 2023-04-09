<?php
    session_start();
    include('connection.php');  
    $name = $_POST['fullname'];  
    $email = $_POST['email1'];  
    $password = $_POST['pword1'];

    $name = stripcslashes($name);  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $name = mysqli_real_escape_string($con, $name);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = md5(mysqli_real_escape_string($con, $password));
    
    $sql = "SELECT * from logindb where email = '$email'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_assoc($result);  
    $count = mysqli_num_rows($result);

    $idsql = "SELECT id from logindb";  
    $retrieve = mysqli_query($con, $idsql);  
    $row1 = mysqli_fetch_assoc($retrieve);  
    $count2 = mysqli_num_rows($retrieve);

    
    if($count != 1){

        $id = $count2;
        $sqlnew = "INSERT INTO logindb (name,email,password, id)
        VALUES ('$name','$email','$password',md5('$id'))";
        $retrieve = $con->query($sqlnew);
        ?>
        <script type="text/javascript">
        alert("Thank you for signing up. Please login to your new account.");
        window.location.href = "../index.html";
        </script>
        <?php
    }  


    else{
        ?>
        <script type="text/javascript">
        alert("Email is already registered. Please login to your registered acount.");
        window.location.href = "../index.html";
        </script>
        <?php
    }     
    // Close connection
    mysqli_close($con);

?>