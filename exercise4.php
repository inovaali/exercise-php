<?php
function showStarPattern($lineQuantity) {
    
    for ($i = 0; $i <= $lineQuantity; $i++) {
        $line = "";
        for ($y = 0; $y < $i; $y++) {
            $line .= "*";
        }
        echo $line . PHP_EOL;
    }
}

showStarPattern(5);

# Add the number of lines in "showStarPattern"