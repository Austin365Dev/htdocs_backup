<?php
    $theme = "light";
?>
<!-- localhost/hello/world.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Hello PHP</h1>

    <p>
        <!-- output tag  -->
        Today: <?php echo date("d m Y"); ?>

        <!-- Today: 6 Nov 2023 -->
        <!-- echo means print -->
    </p>

    <?php if ($theme == "dark"): ?>
    <div style='height: 300px; background: #222; padding: 20px'>
        <h1>Hello PHwoP</h1>
        <p>Some content</p>
    </div>
    <?php else : ?>
    <div style='height: 300px;' background: #ddd; padding: 20px'>
        <h1>Hello PHP</h1>
        <p>Some content</p>
    </div>
    <?php endif ?>


</body>

</html>
