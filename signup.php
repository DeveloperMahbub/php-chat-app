<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
    <div class="signup-form">
        <form action="" method="post" autocomplete="off">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chating with your friends.</p>
            </div>
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Enter Your Username" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="user_pass">Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Enter Your Password" autocomplete="off"  required>
            </div>
            <div class="form-group">
                <label for="user_email">Email Address</label>
                <input type="email" class="form-control" name="user_email" placeholder="Enter Your Email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="user_country">Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled="">Swelect a Country</option>
                    <option>Bangladesh</option>
                    <option>India</option>
                    <option>USA</option>
                    <option>Pakistan</option>
                    <option>France</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user_gender">Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled="">Swelect a Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
            </div>
            <?php include("signup_user.php");?>
        </form>
        <div class="text-center small" style="color: #67428B;">Already have an account? <a href="signin.php">Signin here</a></div>
    </div>

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery_min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap_min.js"></script>

</body>

</html>