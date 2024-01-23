
<?php
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']) );
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
      case 'project.php':
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
    'project.php'=>'Project',
    'contact.php'=>'Contact',
    'gallery.php'=>'Gallery',
);
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
            $background2 = 'blood';
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


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
  </head>
  <body class="<?php echo $body ;?>">
    <header>
      <div class="inner-header">
        <a href="index.php">
          <img id="logo" src="images/logo.png" alt="logo" />
        </a>
        <!--<nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="daily.php">Daily</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
          </ul>
        </nav> -->
        <nav>
        <ul>
            <?php
           
            foreach( $nav as $key => $value){
               if(THIS_PAGE == $key){
                echo '<li><a style="color:red;" href=" '. $key.' " > ' .$value.' </a></li>'; 
               }else {
                echo '<li><a style="color:green;" href=" '. $key.' " > ' .$value.' </a></li>'; 
               } 
            }//end foreach 
            
        
            ?>
             </ul>
        </nav>

      </div>
      <!-- end inner header-->
    </header>