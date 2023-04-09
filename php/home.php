<?php
    session_start();
    if ($_SESSION['id']=='')
    {
        ?>
        <script type="text/javascript">
        alert("You are not signed in please Login.");
        window.location.href = "../index.html";
        </script>
    <?php }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
        <meta name="viewport" content="width=device-width">

        <meta name="google-signin-client_id" content="490640356685-iegc25sqsalsgholq3vba19032is2dn0.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <title>Azilbyte</title>
        
        
        <!-- favicon -->
        <link rel="icon" type="image" href="../img/goldLogo.png">
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header><h1>Welcome <?php echo $_SESSION['name'];?>!</h1></header>
                    <form action = "logout.php">
                        <div class="field button-field">
                            <button>Sign out</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid text-right">
                <a href="#"><img src="../img/AzilbytewhitegoldLogo.png" alt="Azilbyte"></a>
            </div>
        </footer>

        <!-- JavaScript -->
        <script src="../js/script.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        type="text/javascript"></script>
    </body>
</html>