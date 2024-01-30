<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form </title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h1></h1>   
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
            <br>
            <label>Phone</label>
            <input type="tel" name="phone">
            
            <label>How many Lattes?</label>
            <input type="number" name="lattes">
            
            <label>How many Cappuccinos?</label>
            <input type="number" name="cappuccinos">
            
            <label>How many Americanos?</label>
            <input type="number" name="americanos">
            
            <label>Special Request?</label>
            <textarea name="comments"></textarea>
            <input type="submit" value="Send my order!">
            <p><a href="">RESET</a></p>
        </fieldset>
    </form>
<?php
// name ,phone , lattes , capucinos, americanos , comments 
date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');
    if(isset($_POST['name'], $_POST['phone'], $_POST['lattes'], $_POST['cappuccinos'], $_POST['americanos'], $_POST['comments'])){
    // add my statements regarding fields that are empty
    if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['lattes']) || empty($_POST['cappuccinos']) || empty($_POST['americanos']) || empty($_POST['comments'])){
        echo '<p class="error">Please fill out all of the fields!</p>';
    } else {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $lattes = $_POST['lattes'];
        $cappuccinos = $_POST['cappuccinos'];
        $americanos = $_POST['americanos'];
        $comments = $_POST['comments'];
        $total = $lattes +  $cappuccinos + $americanos ;
 
// if and elseif statement regarding our time 
if($our_time <= 11) {
    $our_time = "Good Morning";
} elseif ($our_time <= 17) {
    $our_time = "Good Afternoon";  
} else {
    $our_time = "Good Evening";
}

echo '<div class="box">
        <h2>'.$our_time.' '.$name.'!</h2>
        <p>We have texted your order to this <b>phone number </b>: '.$phone.' and you have ordered totaling '.$total.' beverages:</p>
        <ul>
            <li>  '.$lattes.' lattes </li>
            <li>  '.$cappuccinos.' cappuccinos</li>
            <li> '.$americanos.' americanos</li>
        </ul>
        <p>This is your special<b> request</b>!: '.$comments.'</p>
        <p>Thank you for choosing our establishment!</p>
    </div>';
}
}
?>
</body>
</html>