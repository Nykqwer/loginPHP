<?php
    session_start();
    include('dbcon.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * from login where username='$user' and userpass = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $user;
            header("location: welcome.php");
        } else {
          ?>
           <script>alert("Incorrect username or password");</script>;
            <?php header("location: login.php");
        }
    }
    ?>