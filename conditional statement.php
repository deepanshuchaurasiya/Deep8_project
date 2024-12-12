 
<!-- //  $a = 10;
//  if($a++==10 && ++$a !=12){
//     echo "Budhi gayab";

//  }else if ($a-- + ++$a > 20){
//     echo $a;
      
//  }
 
// $var = 100;
// if($var !='100' && $var === 100){
//     echo"Equal";

// }elseif(!$var){
//     echo "Again Equal";
// }elseif($var > 10 || $var<10){laderoof if else 
//     echo "kaa Ho";
// }else{
//     echo "kha gva";
// } -->

<!-- //  $a = 10;
// if($a++==10 && ++$a !=12):
//     echo "why";
// elseif($a-- + ++$a>20):
//     echo $a;
//     echo "it is possible";
// else:
//     echo "hmm bhi h bhai";
//    endif; -->
<?php
$a = 10;
if($a++==10 && ++$a !=12):
    echo "why";
    echo "Naaaa";
elseif(--$a + $a++ == 24):
    echo $a."<br>";
    echo "it is possible";
elseif($a - $a++ + --$a ==25);
    echo "kuch nahi ayega sir ";
else:
    echo $a;
endif;
?>