<?php
ob_start();
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home page of our website Project';
        $body = 'home';
        break;
      case 'about.php':
            $title = 'About page of our website Project';
            $body = 'about inner ';
            break;
      case 'daily.php':
            $title = 'Daily page of our website Project';
            $body = 'daily inner ';
            break;
      case 'social.php':
            $title = 'Project page of our website Project';
            $body = 'project inner';
            break;
      case 'contact.php':
            $title = 'Contact page of our website Project';
            $body = 'contact inner';
            break;
      case 'gallery.php':
            $title = 'Gallery page of our website Project';
            $body = 'gallery inner';
            break;
}



// our navigational array 
$nav = array (
    'index.php'=>'Home',
    'about.php'=>'About',
    'daily.php'=>'Daily',
    'social.php'=>'Project',
    'contact.php'=>'Contact',
    'gallery.php'=>'Gallery',
);
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

// this is the beging of the switch for homework3!!
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
$today = date('l');
}
switch($today){
case 'Saturday':
        $actDay ='orange';
        $day = 'Saturday is  The Beekeeper Day';
        $details = 'Cheerfully undemanding and enjoyably retrograde, The Beekeeper proves that when it comes to dispensing action-thriller justice, Statham hasn it lost his sting.';
        $picture = 'TheBeekeeper.png';
        $altTag = 'The Beekeeper';
        $background2 = 'blood';
        break;
case 'Sunday':
        $actDay ='black';
        $day = 'Sunday is MEAN GIRLS Day';
        $details = 'As long as you can avoid comparing it to the original -- and you do not mind musicals -- Mean Girls is a fun watch with some strong performances.';
        $picture = 'MEANGIRLS.png';
        $altTag = 'MEAN GIRLS';
        $background2 = 'white';
        break;

case 'Monday':
        $actDay ='green';
        $day = 'Monday is POOR THINGS Day';
        $details = 'From filmmaker Yorgos Lanthimos and producer Emma Stone comes the incredible tale and fantastical evolution of Bella Baxter ';
        $picture = 'POORTHINGS.png';
        $altTag = 'POOR THINGS';
        $background2 = 'blood';
        break;

case 'Tuesday':
        $actDay ='black';
        $day = 'Tuesday is KILLERS OF THE FLOWER MOON Day';
        $details = 'Enormous in runtime, theme, and achievement, Killers of the Flower Moon is a sobering appraisal of America is relationship with Indigenous peoples and yet another artistic zenith for Martin Scorsese and his collaborators. ';
        $picture = 'KILLERSOFTHEFLOWERMOON.png';
        $altTag = 'KILLERS OF THE FLOWER MOON';
        $background2 = 'blood';
        break;

                    
case 'Wednesday':
       $actDay ='gray';
      $day = 'Wednesday is THE HOLDOVERS  Day';
      $details = 'Beautifully bittersweet , The Holdovers marks a satisfying return to form for director Alexander Payne ';
      $picture = 'THEHOLDOVERS.png';
      $altTag = 'THE HOLDOVERS';
      $background2 = 'blood';
      break;
        
case 'Thursday':
      $actDay ='White';
      $day = 'Thursday is WONKA Day';
      $details = 'With director Paul King at the helm and some solid new songs at the ready, the warmly old-fashioned Wonka puts a suitably sweet spin on the classic character while still leaving some room for the source material \'s darker undertones. ';
      $picture = 'WONKA.png';
      $altTag = 'WONKA';
      $background2 = 'blood';
       break;
                    
case 'Friday':
      $actDay ='black';
      $day = 'Friday is TMZ No BS';
      $details = 'Jennifer Lopez,Dive into the highs and lows of the life (and loves) of JLo, and how she became the most impressive force in entertainment for over 3 decades. ';
      $picture = 'JenniferLopez.png';
      $altTag = 'Jennifer';
      $background2 = 'blood';
      break;
}
// my form's  php 




$first_name ='';
$last_name='';
$gender='';
$email='';
$phone='';
$wines = '';
$regions='';
$comments='';
$privacy='';

$first_name_err = '';
$last_name_err = '';
$gender_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if inputs are empty , we will delear a statement else we will assigen the $_POSTS to variable 
    //$wines = $_POST['wines']
  
    if (empty($_POST['first_name'])) {
        //say something or do something 
$first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        //say something or do something 
$last_name_err = 'Please fill in your last name';
    } else {
        $last_name= $_POST['last_name'];
    }

    if (empty($_POST['gender'])) {
        //say something or do something 
$gender_err = 'Please check your gender ';
    } else {
        $gender= $_POST['gender'];
    }

    if (empty($_POST['email'])) {
        //say something or do something 
$email_err ='Please fill in your email';
    } else {
        $email= $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        //say something or do something 
$phone_err ='Please fill your phone number';
    } else {
        $phone= $_POST['phone'];
    }
    if (empty($_POST['wines'])) {
        //say something or do something 
$wines_err ='What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }
    if ($_POST['regions'] == NULL) {
        $regions_err = 'Please choose your region ';
    } else {
        $regions = $_POST['regions'];
    }
// if($_POST['regions'] == NULL ) {
//         //say something or do something 
// $regions_err ='Please choose your region ';
//     } else {
//         $regions= $_POST['regions'];
//     }
    if (empty($_POST['comments'])) {
        //say something or do something 
$comments_err ='We value your input ';
    } else {
        $comments= $_POST['comments'];
    }
    if (empty($_POST['privacy'])) {
        //say something or do something 
$privacy_err ='You must agree to recive spam email!';
    } else {
        $privacy= $_POST['privacy'];
    }

function my_wines($wines) {
        $my_return='';
        if(!empty($_POST['wines'])) {
            $my_return = implode(',', $POST['wines']);
        }
return $my_return;       
} // end my_wines function 
       
if(isset($POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])){
    $to ='abeldbase@gmail.com';
    $subject = 'Test eamil on '.date('m/d/y, h i A');
    $body = '   
    First Name: '.$first_name.'  '.PHP_EOL.' 
    Last Name: '.$last_name.'  '.PHP_EOL.' 
    Email: '.$email.'  '.PHP_EOL.' 
    Gender: '.$gender.'  '.PHP_EOL.' 
    Phone: '.$phone.'  '.PHP_EOL.' 
    Wines: '.my_wines($wines).'  '.PHP_EOL.' 
    Region: '.$regions.'  '.PHP_EOL.' 
    Comments: '.$comments.'  '.PHP_EOL.' 
    Privacy: '.$privacy.'  '.PHP_EOL.' 
    ';
    $headers = array(
        'From' => 'noreply@gmail.com'
    ); 
    
    //we will be adding an if statement - that this email will work ONLY if all the fields are filled out!!!

if (!empty(
        $first_name &&
        $last_name &&
        $email &&
        $gender &&
        $phone &&
        $wines &&
        $regions &&
        $comments &&
        $privacy )){
    // Send email
    mail($to, $subject, $body, $headers);
    // Redirect to thank you page
    header('Location: thx.php');
    
}
// don't forget , you must upload your form onto the server to recive an email !!!
}
}// closing server request method 
