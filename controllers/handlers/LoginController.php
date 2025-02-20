<?php
     session_start();
    // require user model
    require './model/User.php';
    $user = new User($pdo);

    // get user data from POST request
    $email = isset($_POST['email']) ? $_POST['email'] : "" ;
    $password = isset($_POST['password'])? $_POST['password'] : "" ;

    // check if user login have email and password correctly with our database
    if($email && $password) {
        // if check is successful create token and store token to database table user_tokens with user_id
        $query = "select * from users where email = :email and password = :password";
        $params = [
            ':email' => $email,
            ':password' => $password
        ];
        $res = $user->show($query, $params);

        if ($res) {
            // create token
            $token = bin2hex(random_bytes($length / 2));
            // store token in database table user_tokens with user_id
            $query = "INSERT INTO user_tokens (user_id, token) VALUES (:user_id, :token)";
            $params = [
                ':user_id' => $res['id'],
                ':token' => $token
            ];
            $user->execute($query, $params);
            // after create token successfully store token in session with the name user_token to session
            $_SESSION['user_token'] = $token;

            // call SendMail to send mail to user to inform then about this login
            
            // last step return to page home page with session token

            header('location: /home'); // redirect to home page with token in session

        }else {
            header('location: /login');
        }




    }
    else {
        header('Location: /login');
    }
    // or else user with stay in login page 

?>