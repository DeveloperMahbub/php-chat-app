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
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Forgot Password</h2>
                <p>MyCaht</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Bestfriend name</label>
                <input type="text" class="form-control" name="bf" placeholder="Enter Best friend name" autocomplete="off"  required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
            </div>
            
        </form>
        <div class="text-center small" style="color: #67428B;">Back to Signin? <a href="signin.php">Click here</a></div>
    </div>

    <?php     
        
        include("include/connection.php");
        session_start();

        if (isset($_POST['submit'])) {
            $email              = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
            $recovery_account   = htmlentities(mysqli_real_escape_string($con,$_POST['bf']));

            $select  = " select * from users where user_email ='$email' AND forgotten_answer ='$recovery_account'";

            $query = mysqli_query($con, $select);

            $check_user = mysqli_num_rows($query);

            if ($check_user==1) {

                

                $_SESSION['user_email'] = $email;

                echo "<script>window.open('create_password.php', '_self')</script>";
            }
            else{
                echo "<script>alert('Your email or bestfriend name is incorrect.')</script>";
                echo "<script>window.open('forgot_pass.php', '_self')</script>";
            }
        }
    ?>

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery_min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap_min.js"></script>

</body>

</html>