<?php 

function verify($number) {
    if ($number > 0) {
        return "Positive";
    } else if ($number < 0) {
        return "Negative";
    }
    return "Neutral";
}

print_r(verify(10));

# Add number in the "verify" parameter