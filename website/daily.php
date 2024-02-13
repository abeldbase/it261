<?php

include('config.php');
include('./includes/header.php');
?>
    <div id="wrapper">
      <main>
        <h1>Welcome to my daily page .</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos a quis
          quaerat asperiores ullam tempora eum eveniet repellat, magnam suscipit
          inventore officiis. Earum alias nam itaque officiis quod culpa
          debitis?Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra
          justo nec ultrices dui sapien eget. Volutpat maecenas volutpat blandit
        </p>
        <h2 class="<?php echo $actDay; ?>"><?php echo $day; ?></h2>
        <img src="./images/<?php echo $picture;?>" alt="<?php echo $altTag;?>" >
        <p><?php echo $details; ?></p>
        <h2> Don't see your favorite show ? check out days below!</h2>
<ul>
    <li>
        <a style="color:<?php 
        if($today=='Sunday'){echo 'orange';
        }else{echo 'blue';};?>" href="daily.php?today=Sunday">Sunday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Monday'){echo 'green';
        }else{echo 'blue';};?>" href="daily.php?today=Monday">Monday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Tuesday'){echo 'black';
        }else{echo 'blue';};?>" href="daily.php?today=Tuesday">Tuesday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Wednesday'){echo 'green';
        }else{echo 'blue';};?>" href="daily.php?today=Wednesday">Wednesday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Thursday'){echo 'White';
        }else{echo 'blue';};?>" href="daily.php?today=Thursday">Thursday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Friday'){echo 'Red';
        }else{echo 'blue';};?>" href="daily.php?today=Friday">Friday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Saturday'){echo 'Yellow';
        }else{echo 'blue';};?>" href="daily.php?today=Saturday">Saturday</a>
    </li>
</ul>
</main>
<aside>
      <?php
$today = date('l');  // Full day name (e.g., Monday)
$our_time = date('H');  // Current hour in 24-hour format
$currentDate = date('Y-m-d');  // Current date in YYYY-MM-DD format
echo '<br>';
date_default_timezone_set('America/Los_Angeles');

     echo '<h2> Today\'s </h2>';
       echo '<br>';
       echo date ('l, F j, Y h:i:A');
    if ($our_time > 12) {
        echo '<h2 style="color: yellow;">Good morning , It\'s time to get up!</h2>';
        $picture = 'morning.png';
        $altTag = 'Morning Image';
       
    } else {
        echo '<h2 style="color: red;">Good night , There\'s always tomorrow !</h2>';
        $picture = 'alley-in-the-evening.png';
        $altTag = 'Evening Image';
    }
    ?>
    <!-- Vary image based on the current hour -->
 
    <img src="./images/<?php echo $picture; ?>" alt="<?php echo $altTag; ?>">   
</aside>
    </div>
    <!-- end wrapper  -->
   <?php include('./includes/footer.php');?>
   