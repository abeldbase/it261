<?php
// more on our form - addtiojnal fields , AND>>>
// the logic - if I do not ewnter anything inside the input field, there will be a messager!!!
// if a field is empety , we need to do something --sounds like if else statement 
// first_name, last_name, email,comments 
// be careful with our braces!!!!
if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])){
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$comments= $_POST['comments'];
// create another if statement - if filelds are empety , echo please fill out the fields 
if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])){
    echo' Please fill out all of the fields';
}else{
    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
    echo '<br>';

} // end else 
}else{
    echo'<form action="" method="post">
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
</form>
<p><a href="">RESET</a></p>';
} // end isset



