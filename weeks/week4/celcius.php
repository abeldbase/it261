<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h1>Celcius Form Converter!</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>Enter your celcius value</label>
            <input type="number" name="cel">
            <input type="submit" value="Conver it!">
            <p><a href="">RESET</a></p>
        </fieldset>
    </form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted

    if (isset($_POST['cel'])) {
        // Check if the 'cel' field is set

        $cel = $_POST['cel'];
        // We will use a new function to make sure that our values are integers intval{}
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) + 32;
        
        // Check if the input is a valid number
        if ($cel == NULL) {
            echo '<p class="error">Please fill out thr celcius value</p>';
        } elseif ($far <= 32) {

            echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and it is pretty cold out there! </p>';
           
        } 
        elseif ($far <= 45 ){
            echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and it is getting warmer! </p>';   
        }
        elseif ($far <= 60 ){
            echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and it is sweater weather! </p>';   
        }
        elseif ($far <= 75 ){
        echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and we are going to the park! </p>';   
    }
    elseif ($far <= 90 ){
        echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and we may be going to the beach! </p>';   
    }
    else {
        echo '<p>' . $cel_int . ' degrees Celsius equals ' . $far . ' degrees Fahrenheit.<br> and we are at the beach! </p>';   
    }
    }
}
?>

  
</body>
</html>