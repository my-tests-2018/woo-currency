<?php
$numbers = [2, 3, 4, 5, 6];

function product_two($number)
{
    return $number * 5;
}

for ($counter = 0; $counter <= 4; $counter++) {

    echo product_two($numbers[$counter]) . '<br>';

}


//echo $numbers[0]*2 .'<br>';
//echo $numbers[1]*2 .'<br>';
//echo $numbers[2]*2 .'<br>';
//echo $numbers[3]*2 .'<br>';
//echo $numbers[4]*2 .'<br>';


?>