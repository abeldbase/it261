<?php
//if statment
//if else statement
//if elseif statement
$temp = 55;
if($temp <- 60){
    echo 'it is a semi-warm day!';
} else {
    //the new code gose here 
    echo 'it may be getting warmer!';

}
echo '<br>';
$new_temp = 81;
if ($new_temp <= 60){
echo 'Not a very warm day!';
}elseif($new_temp <= 70){
    echo 'It\'s geting warmer!';
}elseif($new_temp <= 80){
    echo 'We might be going to the beach!';
}else{
    echo 'We will <b>definitely</b>  go to the beach!'; 
}

echo '<h2>This exercise will be about a sallary ,a bonus and sales! </h2>';
// a salary of 95000 - annual 
// sales need to be above 100000, you will start making bonus!!!
// 100000 = 5%
// 120000 = 10%
//140000 = 15%
//150000 =20%
$salary = 95000;
$sales = 148000;
//if sales is equal or less than 99999, then you do not recive any bonus 
// if sales is equal or less than 119999, then you will recive 5% 
// if sales is equal or less than 139999, then you will recive 10%
// if sales is equal or less than 149999, then you will recive 15% 
if($sales <= 99999){
echo 'Sorry, you did not make your bonus!';
} elseif($sales <= 119999){
$salary *= 1.05;    
echo '$'.number_format($salary, 2).' dollars'; 
}elseif ($sales <= 139999){
$salary *=1.10;    
echo '$'.number_format($salary, 2).' dollars'; 
}elseif ($sales <= 149999){
$salary *=1.15;    
echo '$'.number_format($salary, 2).' dollars'; 
}else {
$salary *=1.20;   
echo 'Awesom! You made 20% bonus!!! Your annual salary including bonus totals $'.number_format($salary, 2).' dollars'; 
}