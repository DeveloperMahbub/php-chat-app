<!DOCTYPE html>
<?php
session_start();
include("find_friends_function.php");
if (!isset($_SESSION['user_email'])) {
    header("location: signin.php");
}else{
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Friends</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/find_people.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <?php $user = $_SESSION['user_email'];
                $get_user = "select * from users where user_email = '$user'";
                $run_user = mysqli_query($con, $get_user);
                $row = mysqli_fetch_array($run_user);
                $user_name = $row['user_name'];
                echo "<a class='nav-link'style='color:white;' href='../home.php?user_name=$user_name'>MyChat</a>";
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white;" href="../account_settings.php">Setting</a>
            </li>
            </ul>
            <div >
                <form action="" class="search_form">
                    <input type="text" name="search_query" style="border:1px solid #fff;" placeholder="Friends Name or Country" autocomplete="off" required>
                    <button type="submit" class="btn" name="search_btn">Search</button>
                </form>
            </div>
        </div>
    </nav><br>
    <?php search_user();?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<?php }?>