<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<?php
    $current_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
    $image = $current_url . '/storage/assets/avatars/no_photo.jpg'
?>
<div class="profile-container" id="profile">
    <h2 class="text-center">Welcome to Your Profile</h2>
    <div class="text-center">
        <img id="avatar" class="avatar" src="<?= $image?>" alt="Avatar">
    </div>
    <ul class="list-group mt-4">
        <li class="list-group-item"><strong>First Name:</strong> <span id="first_name"></span></li>
        <li class="list-group-item"><strong>Last Name:</strong> <span id="last_name"></span></li>
        <li class="list-group-item"><strong>Email:</strong> <span id="email"></span></li>
    </ul>
    <div class="text-center mt-4">
        <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>
</div>

<script>

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>