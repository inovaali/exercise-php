<?php

function mutiplicationTable($number) {
    for ($i = 1; $i <= $number; $i++) {
        $result = $i * $number;
        print_r($i . "x" . $number . " = " .  $result . PHP_EOL);
    }
}

mutiplicationTable(10);

# Add a number in the "mutiplicationTable" parameter