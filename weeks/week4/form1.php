<?php

if(isset($_POST['name'],
$_POST['email'])){
$name= $_POST['name'];
$email= $_POST['email'];
echo $name;
echo '<br>';
echo $email;
}else {
    echo '
    <form action = "" method="post">
    <lable>NAME</lable>
    <input type="text" name="name">
    <lable>EMAIL</lable>
<input type="email" name="email">
<input type="submit" value="send it!">
    </form>';
}
?>