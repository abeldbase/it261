<?php
$product =120; // is our integer 
$quantity =5;
$total =$product * $quantity;
$total *= 1.097;
echo 'We have a total of  <b>$' .number_format($total ,2 ).'</b> dollars';