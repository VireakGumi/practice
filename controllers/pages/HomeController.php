<?php
    session_start();
    // ____________ TO DO: __________
    $token = isset($_SESSION['user_token']) ? $_SESSION['user_token'] : "";
    // check session if the token have return to home page and show information like: 
    //     - first_name, 
    //     - last_name, 
    //     - email, 
    //     - avatar
    // if user token after check check with database is not correct return to login page

    // example of how to check if token have value or not
    // if (isset($_SESSION['token']) && !empty($_SESSION['token'])) { 

    // }

    require "./views/pages/HomePage.php"

?>