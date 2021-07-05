    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
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
                echo "<a class='nav-link'style='color:white;' href='home.php?user_name=$user_name'>MyChat</a>";
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white;" href="account_settings.php">Setting</a>
            </li>
            </ul>
        </div>
        </div>
    </nav><br>