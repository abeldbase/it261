<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithemetic Form </title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
 <h1></h1>   
 <form action = "" method="post">
        <fieldset>
    <label>Name</label>
    <input type="text" name="name">
    <br>
    <label>Phone</label>
    <input type="tel" name="phone">

    <label>How many Lattes?</label>
    <input type="number" name="lattes">

    <label>How many capucinos?</label>
    <input type="number" name="capucinos">


    <label>How many Americano?</label>
    <input type="number" name="americanos">

    <label>Special Request</label>
    <textarea name="comments"></textarea>
    <input type="submit" value="Send my order!">
    <p><a href="">RESET</a></p>';
    </fieldset>
</form>
<?php
// name ,phone , lattes , capucinos, americanos , comments 
date_default_timezone_set('America/Los_Angeles');
$our_time= date('H:i');
if(isset($_POST['name']
$_POST['phone'],
$_POST['lattes'],
$_POST['capucinos'],
$_POST['americano'],
$_POST['comments'],)){
    // add my statements regarding fields that are empty
if(empty($_POST['name'] &&
$_POST['phone'] &&
$_POST['lattes']&&
$_POST['capucinos']&&
$_POST['americano']&&
$_POST['comments'],)){
    echo' <p class="error">Please fill out all of the fields!</p>';
}else{
 $name= $_POST['name'] ;
 $phone=$_POST['phone'];
 $lattes=$_POST['lattes'];
 $capucinos=$_POST['capucinos'];
 $americano=$_POST['americano'];
 $comments=$_POST['comments'];
 

}





}//end isset



?>
</body>
</html>