<?php
// this file will demonstrate for loops and addition to placing your php inside your html!!!
// the for loops  through a block of code a specified number of times.
//for (init counter ; test counter ; increment counter){ code to be excuted for each iteration;}
//celcius and fahrenheit  
// $far = ($celcius * 9/5 ) +32;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
*{
    padding : 0;
    margin: 0;
    box-sizing:border-box;

}



table {
    width:500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
}
td, th {
    border: 1px solid lightblue;
    border-collapse: collapse;
    padding:5px;
}
h1, h2{
    textr-align:center;
    margin:10px 0;
    color:green;

}
    </style>
</head>
<body>
    <h1> My celcius / Fahrenheit Table!</h1>
<table>
    <tr>
        <th>Celcius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for ($cel = 0; $cel <= 100; $cel += 3){
        $far = ($cel * 9/5) +32;
        echo '<tr>';
        echo '<td>'.$cel.' degrees</td>';
        echo '<td>'.$far.' degrees</td>';
        echo '</tr>';
    }
    ?>
</table>
<h2>kilometer/milage table ! </h2>
<table>
    <tr>
        <th>kilometer</th>
        <th>Mile</th>
    </tr>
    <?php
     for ($kilo = 2; $kilo <=20;  $kilo += 1){
        $mile = ($kilo *0.609344 );
        echo '<tr>';
        echo '<td>'.$kilo.' kilometers</td>';
        echo '<td>'.$mile.' miles</td>';
        echo '</tr>';
    }
   
    ?>
</table>
</body>
</html>
