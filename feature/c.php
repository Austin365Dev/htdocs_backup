<?php

namespace Foo;

include("a.php");
include("b.php");

Fiz\add(1, 2);  // \Foo\Fiz\add(1,2)

echo "<br>";
\Bar\Baz\add(1, 2, 3);
