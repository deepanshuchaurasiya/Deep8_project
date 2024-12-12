<?php
// array_push(array,new element):-It used for add new element in existing array and it return new array.
$arr = [1,3,4,5];
array_push($arr,[2,3,4,5]);
echo "<pre>";
print_r($arr);
// array_pop(array):-it remove lasta element of array.
array_pop($arr);
print_r($arr);
// array_unshift(array,element):-It insert element begining of array. 
array_unshift($arr,7);
print_r($arr);
// array_shift(array):-it remove first element of array.
array_shift($arr);
print_r($arr);