<?php
// for ($i = 0; $i <= 5; $i++) {
//     for ($j = 5 - $i; $j >= 1; $j--) {
//         echo "*";
//     }
//     echo "<br>";
// }

$count = 0;
function isEven($z)
{
    if ($z % 2 === 0) {
        return $z;
    } else {
        return "* ";
    }
}
for ($x = 2; $x <= 10; $x++) {
    for ($y = 0; $y < $x; $y++) {
        echo isEven($count) . " ";
        $count++;
    }
    echo "<br>";
}
echo "<br>";

for ($i = 2; $i <= 10; $i++) {
    for ($j = 6 - $i; $j >= 1; $j--) {
        echo "*_*";
    }
    echo "<br>";
}
