<?php
    session_start();
    session_destroy();
    unset($_SESSION['user']);
    $_SESSION['message'] = "you are now logged out";
    header("location: http://localhost/votecount1/index/index.html");
    ?>