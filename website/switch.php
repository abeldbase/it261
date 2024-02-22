<?php
//class coffee exercise 
// if today is Friday , it will be pumpkin latte day
//INTRODUCING the isset () function
//then we will introduce our first GLOBAL VARIABLE
//OUR SWITCH 


//starting the switch 
//if $GET['today] is set . $today , then all is well , but it is not set therefore the else is the day !
// else , today is TODAY
 //GLOBAL VARIABLES are capitalized and start with $_GET 
 // WHAT IS THE ISSET FUNCTION  - IS asking if something has been set?
//  $variable = 'This is our variable';
//  if (isset($variable)){
//     echo 'Variable has been set ';
//  }else 
//  echo 'Variable has not been set!';


//   echo'<br>';
    //if(isset($_GET['today'])){
      //  echo 'Today has been set';
   // }else{
     //   echo 'NOT!!!!';
   // }
 if (isset($_GET['today'])){
    $today = $_GET['today'];

 }else{
    $today = date('l');
 }
switch($today){
    case 'Friday':
    $coffee = '<h2>Friday is our pumpkin latte day !</h2>';
    $pic = 'pumpkinlatte.png';
    $alt = 'pumpkin latte';
    $content = '<p><b>This delicious pumpkin latte is naturally sweetened with maple syrup and takes on warm flavors of cinnamon, cardamom, and ginger. There is no pumpkin spice syrup here, just real pumpkin! By briefly cooking the pumpkin with spices on the stovetop before adding the milk to warm through, the pumpkin takes on a sweeter, roasted flavor.</b></p>';
    break;



    case 'Saturday':
    $coffee = '<h2>Saturday is our green tea  latte day !</h2>';
    $pic = 'Grean-Tea-Latte.jpg';
    $alt = 'Grean Tea Latte';
    $content = '<p><b>This Matcha Green Tea Latte is the perfect energizing drink. Itis smooth and creamy, light and rejuvenating. Packed with many benefits and antioxidants from matcha green tea powder. Itis tasty, sweet, and super easy to make with just 3 ingredients. A great alternative to your regular coffee..It is smooth, creamy, rejuvenating, and tastes like no other hot drink. It wakes me up nicely and keeps my brain sharp and focused for hours. No sudden crushes of energy later in the day, like with coffee. It does not give me that "nervous energy" that caffeine sometimes does. Plus, it is  easy on a tummy as well.</b></p>';
    break;


    case 'Sunday':
    $coffee = '<h2>Sunday  is our Regular coffee day !</h2>';
    $pic = 'regularcoffee.jpg';
    $alt = 'Regular coffee';
    $content = '<p><b>Regular coffee is typically made using roasted coffee beans, which have a dark brown color and a strong, bold flavor. White coffee, on the other hand, is made using unroasted coffee beans, which are light in color and have a milder, more subtle flavor..</b></p>';
    break;


    case 'Monday':
        $coffee = '<h2>Monday  is our latte day !</h2>';
        $pic = 'latte.jpg';
        $alt = 'latte coffee';
        $content = '<p><b>A latte is a classic coffee that’s constructed with the two pillar ingredients: espresso and steamed milk. The word “latte” comes from the Italian word “caffè e latte” (other variants are “caffeelatte” and “caffellatte”), which simply means “coffee & milk.” 

        The standard combination for a latte is 1/3 espresso, 2/3 steamed milk, and a small, thin layer of microfoam on the surface. With this ratio, baristas can easily adjust the size of the latte when you order it, though the traditional size of the latte ranges between 10-12 ounces.</b></p>';
        break;



    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano day !</h2>';
        $pic = 'americano.jpg';
        $alt = 'americano';
        $content = '<p><b>Caffè americano, also known as Americano or American, is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way.</b></p>';
        break;
        
        
    case 'Wednesday':
            $coffee = '<h2>Wednesday is our Espresso day !</h2>';
            $pic = 'espresso.jpg';
            $alt = 'Espresso coffee';
            $content = '<p><b>Espresso is one of the world is most popular coffee-brewing methods. Originating from Italy, the French also made significant contributions via the invention of coffee makers, predecessors of today is espresso machines. </b></p>';
            break;
        
        
    case 'Thursday':
                $coffee = '<h2>Thursday  is our caffè mocha day !</h2>';
                $pic = 'mocha.jpg';
                $alt = 'caffè mocha';
                $content = '<p><b>A caffè mocha, also called mocaccino, is a chocolate-flavoured warm beverage that is a variant of a caffè latte, commonly served in a glass rather than a mug. Other commonly used spellings are mochaccino and also mochachino.</b></p>';
                break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Switch classwork Exercise</title>
    <style>

*{
    padding:0;
    margin:0;
    box-sizing:border-box;
 }
#wrapper{
    width: 940px;
    margin:20px auto;
}
h1,h2 , img {
    margin-bottom: 10px;
}
p{
    margin-bottom: 20px;  
}

    </style>

</head>
<body>
    <div id="wrapper">
        <h1>My wonderful Switch classwork exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>

<img src="./images/<?php echo $pic;?>" alt="">
<?php echo $content;?>
<h2>check out our daily specials </h2>
<ul>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>

</ul>


</div>
    <!--end wrapp-->
    
</body>
</html>
 