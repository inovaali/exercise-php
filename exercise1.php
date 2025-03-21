<?php 

function verifyEvenOdd($checker) {
    $result = [];
    for ($i = 1; $i <=100; $i++) {
        if($checker%2 === 0) {
            if($i%2 ===0) {
                $result[] = $i;
                
            }
        } else {
            if($checker%2 !== 0) {
                if($i%2 !==0) {
                    $result[] = $i;
                }
            }
        }
    }
    return $result;
}

print_r(verifyEvenOdd(10));