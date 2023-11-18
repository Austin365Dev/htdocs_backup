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
    <div class="container mt-4" style="max-width:800px">

        <h1 class="h3 mb-3">Profile</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upload photo

            </div>
        <?php endif ?>

        <!-- <?php if (file_exists("_actions/photos/profile.jpg")) : ?>
            <img src="_actions/photos/profile.jpg" alt="" width="300" class="img-thumbnail">
        <?php endif ?> -->

        <?php if (file_exists("_actions/photos/profile.jpg")) : ?>
            <img src="_actions/photos/profile.jpg?<?php echo time(); ?>" alt="" width="300" class="img-thumbnail">
        <?php endif ?>


        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-2">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-primary">Upload</button>
        </form>

        <ul class="list-group mb-2">
            <li class="list-group-item">Name: Wint</li>
            <li class="list-group-item">Email: austin@gmail.com</li>
            <li class="list-group-item">Phone: 238490923</li>
            <li class="list-group-item">Address: Yangon</li>
        </ul>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>

</html>