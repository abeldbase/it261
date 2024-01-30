<?php
// our first form 
// we will bw using the $_GET global variable 
// our logic is : I will be asking for a name and email in my form 
// if it is set yes
// if not , show me the form 
if(isset($_GET['name'],
    $_GET['email'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
    }else {
    echo'
    <form action = "" method="get">
    <lable><NAME</lable>
    <input type="text" name="name">
    <lable>EMAIL</lable>
    <input type="email" name="email">
    <input type="submit" value="Confirm">
    </form>';
    }
  