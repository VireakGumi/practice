<?php
// ____________TO DO ________________
    // get uri routes endpoint
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // create routes endpoint
    $routes = [
        // pages
        '/' => './controllers/pages/HomeController.php',
        '/login' => './controllers/pages/LoginController.php',

        // handlers
        '/login/handler' => './controllers/handlers/LoginController.php'
    ];

    // check if route exists and require the controller
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        echo "404 Page not found";
    }

?>