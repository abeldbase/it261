<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
include('credentials.php');
$errors = array();
// switch(THIS_PAGE){
//     case 'index.php':
//         $title = 'Home page of our website';
//         $body = 'home';
//         break;

//       case 'contact.php':
//             $title = 'Contact page of our website Project';
//             $body = 'contact inner';
//             break;
// }
// our navigational array
$nav = array (
    'index.php'=>'Home',
    'contact.php'=>'Contact',
);
function make_links($nav){
    $my_return ='';
    foreach ($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $my_return .= '<li><a style="color:red;" href="' . $key . '">' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a style="color:green;" href="' . $key . '">' . $value . '</a></li>';
        }
    }// end for each
    return $my_return;
}//
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
}
