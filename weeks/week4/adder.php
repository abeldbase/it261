<?php
// adder-wrong.php

$myTotal = 0; // Initialize $myTotal

if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

    echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>';
    echo '<p style="color:red;">The answer is ' . $myTotal . '!</p>';
    echo '<p><a href="">Reset page</a></p>';
}
?>

<html>
<head>
    <title>My Adder Assignment</title>
    <style>
 p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1"><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2"><br>

        <input type="submit" value="Add Em!!">
    </form>
</body>
</html>
