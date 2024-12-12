<?php
// $age = 20;
// switch($23){
//     case $age >= 18:
//         echo "Eligible for vote";
//         break;
//     case $age < 18:
//         echo "Not eligibal for vote";
//         break;
//     default:
//     echo "No data matched";
//     break;
// }
$age = 20;
switch($age){
    case  10:
        echo "Eligible for vote";
        break;
    case $age < 18:
        echo "Not eligibal for vote";
        break;
    default:
    echo "No data matched";
    break;
}
?>
