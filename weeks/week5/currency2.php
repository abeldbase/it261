<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title>Currency 2 php form </title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name">
            <label>EMAIL</label>
            <input type="email" name="email">
            <label>How much money do you have?</label>
            <input type="number" name="amount">

            <!-- time for our radio button that has an addtional attributes of VALUE  -->
            <label>Choose your currency </label>
            <ul>
            <li><input type="radio" name="currency" value="0.017"> Rubles</li>
            <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
            <li><input type="radio" name="currency" value="1.15"> Pounds</li>
            <li><input type="radio" name="currency" value="1.00"> Euros</li>
            <li><input type="radio" name="currency" value="0.0074">Yen</li>
</ul>
<label>Choose your banking institiution </label>
<select name="bank">
<option value="NULL">Select one!</option>
<option value="boa">Bank of America !</option>
<option value="chase">Chase Bank !</option>
<option value="baner">Baner Bank!</option>
<option value="wells">Wells Fargo!</option>
<option value="becu">Boeing Credit Union !</option>
</select>
            <input type="submit" value="Conver it!">
            <p><a href="">RESET IT !</a></p>
        </fieldset>
    </form> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])){
        echo '<p class="error"> Please fill out your name!</p>';
    }
    if (empty($_POST['email'])){
        echo '<p class="error"> Please fill out your email!</p>';
    }
    if (empty($_POST['amount'])){
        echo '<p class="error"> Please fill out amount!</p>';
    }
    if (empty($_POST['currency'])){
        echo '<p class="error"> Please check  your currency!</p>';
    }
    if ($_POST['bank'] == NULL){
        echo '<p class="error"> please choose your banking institution </p>' ;
    }
    if(isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $amount=$_POST['amount'];
        $currency=$_POST['currency'];
        $bank=$_POST['bank'];
        $dollars = $amount * $currency;
        echo '<div class="box"><h2>Hello ' . $name . '</h2>
        <p>You now have <b>$' .floor($dollars) . ' American dollars</b>, and we will be emailing you at<b> ' . $email . '</b> with your information as well as depositing <br>your fund at <b>'.$bank.' bank !</b></p></div>';
    }
}
?>

</body>
</html>