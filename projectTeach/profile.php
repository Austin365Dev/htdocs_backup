<?php
session_start();
$login = isset($_SESSION['user']);

if (!$login) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width: 800px;">
        <h1 class="h3 mb-4 mt-2">Profile</h1>
        <ul class="list-group mb-2">
            <li class="list-group-item">Name: Austin</li>
            <li class="list-group-item">Email: austin@gmail.com</li>
            <li class="list-group-item">Phone: 755083293</li>
            <li class="list-group-item">Address: Yangon</li>
        </ul>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>

</html>