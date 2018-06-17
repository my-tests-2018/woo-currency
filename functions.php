<?php
//
//function turnRight()
//{
//    echo 'TURN RIGHT';
//}
//
//tutnRihgt();
//
//


//function sum($number1 , $number2)
//{
//
//    return (($number1 + $number2)-1).'<br>';
//}
//
//$sum1 = sum(5,8);
//sum(5,3);
//sum(9,3);
//sum(7,2);
//
//

function calculateDiscount($price,$percent){
$finalPrice = (1- ($percent/100)) * $price;
    return $finalPrice;
}


echo calculateDiscount(1600000,23);

function  printData ($data){

    print $data
}






?>
