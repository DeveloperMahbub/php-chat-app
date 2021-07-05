<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
    <div class="row">
        <div class="signin-form">
            <form action="" method="post" autocomplete="off">
                <div class="form-header">
                    <h2>Create New Passowrd</h2>
                    <p>MyChat</p>
                </div>
                <div class="form-group">
                    <label for="password">Enter Password</label>
                    <input type="password" class="form-control" name="pass1" placeholder="Enter Your Password" autocomplete="off"  required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" name="pass2" placeholder="Confirm Your Password" autocomplete="off"  required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
                </div>
            </form>
            <?php
                session_start();

                include("include/connection.php");
                if (isset($_POST['change'])) {
                    $user = $_SESSION['user_email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];

                    if (strlen($pass1) < 9) {
                        echo "
                            <div class='alert alert-danger'>
                            <strong>Use 9 or more than 9 characters</strong>
                            </div>
                        ";
                    }
                    if ($pass1 !== $pass2) {
                        echo "
                            <div class='alert alert-danger'>
                            <strong>Your Confirm password didn't match with New password</strong>
                            </div>
                        ";
                    }
                    if ($pass1 == $pass2 && strlen($pass1) >= 9) {
                        $update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
                        session_destroy();

                        echo "<script>alert('Your password is changed,Go ahead and Signin')</script>";
                        echo "<script>window.open('signin.php', '_self')</script>";
                    }
                    
                }
    
            ?>

        </div>
    </div>


    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery_min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap_min.js"></script>

</body>

</html>