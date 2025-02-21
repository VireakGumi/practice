<?php
// session_destroy();

// ____________ TO DO: __________
require './model/User.php';
$user = new User($pdo);

$token = isset($_SESSION['user_token']) ? $_SESSION['user_token'] : "";

// check session if the token have return to home page and show information like: 
//     - first_name, 
//     - last_name, 
//     - email, 
//     - avatar
if ($token) {
    $query = 'SELECT users.first_name, users.last_name, users.email, users.avatar FROM users 
            LEFT JOIN user_tokens 
            ON user_tokens.user_id = users.id
            WHERE user_tokens.token = :token';
    $params = ['token' => $token];

    $res = $user->show($query, $params);

    if ($res) { 
        require "./views/pages/HomePage.php";
    } else {
        header('location: /login');  // redirect to login page if token not set
    }

} else {
    // if user token after check check with database is not correct return to login page
    header('location: /login');  // redirect to login page if token not set
}


// example of how to check if token have value or not
// if (isset($_SESSION['token']) && !empty($_SESSION['token'])) { 

// }
