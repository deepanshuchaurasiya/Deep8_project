<?php
// function tab($a){
//    for($i=1;$i=10;$i++);
//     echo $a;
// }
// tab(2);

// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false; // 0 and 1 are not prime numbers
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Divisible by a number other than 1 and itself
        }
    }
    return true; // If no divisors found, it's prime
}
?>