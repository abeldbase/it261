<?php

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
          aliquam etiam erat velit. Elementum facilisis leo vel fringilla est.
          Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius.
          Sodales neque sodales ut etiam. Sit amet tellus cras adipiscing enim.
          Ornare quam viverra orci sagittis eu. Aliquam faucibus purus in massa
          tempor. Consectetur libero id faucibus nisl. Cras adipiscing enim eu
          turpis egestas pretium aenean. Sed risus ultricies tristique nulla
          aliquet enim tortor. Erat velit scelerisque in dictum non consectetur.
          Odio facilisis mauris sit amet. Cursus sit amet dictum sit amet.
          Feugiat in fermentum posuere urna nec tincidunt praesent semper
          feugiat. Aliquet bibendum enim facilisis gravida neque convallis. Sed
          adipiscing diam donec adipiscing tristique risus.
        </p>
        <h2 class="<?php echo $actDay; ?>"><?php echo $day; ?></h2>

        <p><?php echo $details; ?></p>
        <h2> Today\'s</h2>
<ul>
    <li>
        <a style="color:<?php
        if($today=='Sunday'){
            echo 'orange';
            
        }else{
            echo 'blue';
        }; ?>" href="daily.php?
        today=Sunday">Sunday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Monday'){
            echo 'green';
        }else{
            echo 'blue';
        }; ?>" href="daily.php?
        today=Monday">Monday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Tuesday'){
            echo 'black';   
        }else{
            echo 'blue';
        }; ?>" href="daily.php?
        today=Tuesday">Tuesday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Wednesday'){
            echo 'green';
        }else{
            echo 'blue';
        }; ?>" href="daily.php?
        today=Wednesday">Wednesday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Thursday'){
            echo 'White';
            
        }else{
            echo 'blue';

        }; ?>" href="daily.php?
        today=Thursday">Thursday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Friday'){
            echo 'Red';
            
        }else{
            echo 'blue';

        }; ?>" href="daily.php?
        today=Friday">Friday</a>
    </li>
    <li>
        <a style="color:<?php
        if($today=='Saturday'){
            echo 'Yellow';
            
        }else{
            echo 'blue';

        }; ?>" href="daily.php?
        today=Saturday">Saturday</a>
    </li>
</ul>

      </main>
      <aside>
        <h3>Enjoy it!</h3>
        <img src="./images/<?php echo $picture;?>" alt="<?php echo $altTag;?>" >
       
      </aside>
    </div>
    <!-- end wrapper --->
   <?php
   include('./includes/footer.php');