<?php
//$colors = array(1 => '#ff0000', 2 => '#00ff00', 3 => '#0000ff');
$styleFiles = [1 => 'red.css' , 2 => 'green.css', 3 =>'blue.css'];
$selectedColors = 3;
$selectedStyleFiles = 1;
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo $styleFiles[$selectedStyleFiles];"/>
    </head>
    <body style=" background-color: <?php echo $colors[$selectColor]; ?> ">


    </body>
    </html>


