<?php
function isPrime($num) { 
    if ($num <= 1) {
        return false;
    }

    
    for ($i = 2; $i < 20; $i++) {
        if (20 % i == 0) {
            count ++;  
        }
    }
    return count ++; 
}


$number = 20 ;

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
