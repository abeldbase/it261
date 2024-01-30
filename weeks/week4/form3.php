<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
<body>
    <h1>My form3.php</h1>
    <form action = "" method="post">
        <fieldset>
    <label>First Name</label>
    <input type="text" name="first_name">
    <br>

    <label>Last Name</label>
    <input type="text" name="last_name">
    <br>

    <label>Email</label>
    <input type="email" name="email">
    <br>

    <label>Comments</label>
    <textarea name="comments"></textarea>
    <br>

    <input type="submit" value="Send it!">
    <p><a href="">RESET</a></p>';
</fieldset>
</form>
<?php
// logic if isset first_name , last_name.... that is a good thing
// our second if statment - if I have empty fields, thsat is not good , I will echo"please fill out all of the fields!! 
// Now , if the fields are empty , then my else will dysplay an echho of the information 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])){

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$comments= $_POST['comments'];


// nest another if statement in refrence to the fields being empty 


if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])){
    echo' <p class="error">Please fill out all of the fields!</p>';
}else{
    echo' <div class="box">
    <h2>Hello '.$first_name.' '.$last_name.'!</h2>
    <p> We have recived your <b>email as:</b>: '.$email.' and will be reviewing your <b>comments: </b>'.$comments.'</p></div>';
}//end else 
} //end isset
?>
</body>
</html>