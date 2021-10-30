<?php
for ($i = 1; $i <= 10000; $i++) {

    $print = 0;

    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $point += 1;
        }
    }

    if ($point == 2) {
        echo $i . "\n";
    }

}
?>

