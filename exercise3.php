<?php

function factorial($num) {
    echo "O fatorial de " . $num . " é:";
    $result = 1;
    for($i = $num; $i > 0; $i--) {
        echo " " . $i;
        $result *= $i;
    }
    echo " Result is: " . PHP_EOL . $result;
}

factorial(5);

# Add number in "factorial" parameter