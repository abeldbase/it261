
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

echo make_links($nav);
           
            // foreach( $nav as $key => $value){
            //    if(THIS_PAGE == $key){
            //     echo '<li><a style="color:red;" href=" '. $key.' " > ' .$value.' </a></li>'; 
            //    }else {
            //     echo '<li><a style="color:green;" href=" '. $key.' " > ' .$value.' </a></li>'; 
            //    } 
            // }//end foreach 
            ?>
             </ul>
        </nav>

      </div>
      <!-- end inner header-->
    </header>