<?php

namespace Foo;

include("a.php");
include("b.php");

// name ma tuu yin as ko phoyte htr loz ya
use function Foo\Fiz\add as addA;
use function Bar\Baz\add as addB;


addA(1, 2);
echo "<br>";
addB(1, 2, 3);
