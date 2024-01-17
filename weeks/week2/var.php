<?php
// my variables
//don't forget that a varable is merly a container for data

$name="Abel"; // Abel is a string , we can use double quote ("") or singlr quote ('')for varuables 
$body_temp=98.6; // 98.6 is a float but if it was 98 only it is an integer 
$car="Toyota";
$color="red";
echo $name; // echo declar always the last value of the same variables/ integer or float 
echo '<br>';
echo '<br>';
echo $body_temp;
echo '<br>';
echo "My name is $name!";
echo '<br>';
echo 'My name is $name!'; // when we use a variable in a singlre qote we need to use single quote and dote before the variable and dote and qote ate the end of the variablew 
// examle see the following 

echo '<br>';
echo 'My name is '.$name.' !'; 
echo '<br>';
echo 'The body temprature for human being is '.$body_temp.' .'; 
echo '<br>';
$name = 'Sharon';
echo $name; // remeber what we have mentioned on line 9 
echo '<br>';
$x=20;
$y=5;
$z=$x+$y; // I am using the term "assigend " vs equal 
echo '<br>';
echo $z;

echo '<br>';
$z= $x*$y;// remeber what we have mentioned on line 9 ...echo declar always the last value of the same variables/ integer or float 
echo '<br>';
$z= $x / $y;
echo $z;
echo '<br>';
$first_name = "Abel ";
$last_name =" Mengstu";
echo $first_name. ' ' .$last_name;
echo '<br>';
echo $first_name. " " .$last_name;
echo '<br>';
echo "My full name is $first_name  $last_name";
echo '<br>';
echo 'My full name is '.$first_name.' '.  $last_name.' .';