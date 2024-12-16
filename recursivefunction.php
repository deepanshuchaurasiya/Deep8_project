<?php
// function number($num){
//     if($num <=10){
//         echo $num."<br>";
//         echo number($num+1);

//     }
   
// }
// number(1);

function factorial($num){
    if($num==0){
        return 1;
    }
    return $num*factorial($num-1); 
}
 echo factorial(4);


