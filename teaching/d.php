<?php


include("a.php");
include("b.php");

// name ma tuu yin as ko phoyte htr loz ya
use function Foo\Fiz\add as addA;
use function Boo\Lee\multi as multiA;
use function Bar\Baz\add as addB;


addA(1, 2);
echo "|";
addB(1, 2, 3);
echo "|";
multiA(4, 4);
