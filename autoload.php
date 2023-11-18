<?php

spl_autoload_register(function ($class) {
    // echo "$class"; you will know why we need to edit

    // apache uses forward slash / instead of backslash \ 
    $class = str_replace("\\", "/", $class);
    include("$class.php");
});
