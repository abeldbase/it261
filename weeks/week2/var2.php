<?php
// concentration 
//operatores - assigement operatores
//some present functions 
//arrays 
$name='Abel ';
$first_name =' Abel ';
$last_name = 'Mengstu';
echo '<br>';
$name = 'Abel';
$name.=' Mengstu';
echo $name;
echo '<br>';
$color='red';
echo $color;



echo '<br>';

echo 'Abel\'s favorite color is '.$color.' ';
echo '<br>';
$x=20;
$y=5;
$z=$x + $y;
echo $z;
echo '<br>';

$x =20;
$x += 5;
echo $x;
echo '<br>';
$x =100;
$x *= 10;
echo $x;
$x /= 10;
echo '<br>'; 
echo $x;// remeber always the variable takes the last assigen value or the last resul ,
// in this example it take the last value ox which is 1000 and devideed it by 10 
echo '<br>';
echo '<h3> Our product , quantity and tax exercise  </h3>';
$product =120;
$quantity =5;
$total =$product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3> We would like our amount to reflect 2 decimal places --  we are thinking about floats and a new function - number_format () </h3>';
$product =120; // is our integer 
$quantity =5;
$total =$product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of  <b>$' .$total_friendly.'</b> dollars';
echo '<br>';
$product =120; // is our integer 
$quantity =5;
$total =$product * $quantity;
$total *= 1.098;
echo 'We have a total of  <b>$' .number_format($total ,2 ).'</b> dollars';
echo '<h3>Our second prsent function is our date function</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date("l jS \of F Y h:i:s  A");

echo '<br>';

date_default_timezone_set('America/Los_Angeles'); // we can set the time zone according to our location or time zone we want to set 

echo '<br>';

echo date("l jS \of F Y h:i:s  A");


echo '<br>';
echo '<h3>Time for an array!</h3>';
echo '<h4>below is an indexed array </h4>';
// can we echo an array?? no we can not!
$fruit[] = 'bananas'; //0

$fruit[] = 'cherries'; //1

$fruit[] = 'melon'; //2

$fruit[] = 'kiwi'; //3

$fruit[] = 'oranges'; //4

$fruit[] = 'apples'; //5
echo $fruit;
echo '<br>';
echo $fruit[2];
$fruit = array( 
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);



$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];

echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';

$nav = array(
    'index.php' => 'Home',  /// index is the key and Home is the value 
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';



echo '<br>';






echo '<br>';







echo '<br>';