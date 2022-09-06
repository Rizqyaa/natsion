<?php
// setiap menggunakan session, harus diawali dengan session_start
    session_start();

    $_SESSION['username'] = "youko";
    $_SESSION['password'] = 4821;


    echo $_SESSION['username'];
    echo $_SESSION['password'];
?>