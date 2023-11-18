<?php

namespace Foo;

include("a.php");
include("b.php");

// name ma tuu yin as ko phoyte htr loz ya
use function Foo\Fiz\add as addA;
use function Bar\Baz\add as addB;

// Start output buffering
ob_start();

addA(1, 2);

// Capture the output of addA(1, 2) and store it in $outputA
$outputA = ob_get_clean();

// Start output buffering again
ob_start();

addB(1, 2, 3);

// Capture the output of addB(1, 2, 3) and store it in $outputB
$outputB = ob_get_clean();

// Output the captured output in the desired order
echo $outputA;
echo "<br>";
echo $outputB;
