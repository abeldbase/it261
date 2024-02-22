<?php

$wines = '';

$wines_err = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// if inputs are empty , we will delear a statement else we will assigen the $_POSTS to variable 
    //$wines = $_POST['wines']
    if (empty($_POST['wines'])) {
        //say something or do something 
$wines_err ='What... no wines?';
    } else {
        $wines = $_POST['wines'];  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title>Form 1</title>
   
</head>
<body>
    <h1>First form in week 6 </h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   
    <fieldset>
        <legend>Contact Abel</legend>
        <label >First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ; ?>">
        
   

        <label >Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ; ?>">
   
  

        <label >Email</label>
        <input type="email"  name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ; ?>">
     


        <label>Gender:</label>
        <ul>
   
    <li>
        <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'female') echo 'checked="checked"'; ?>>
        Female
    </li>
    <li>
        <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'male') echo 'checked="checked"'; ?>>Male</li>
    <li>
        <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] === 'neither') echo 'checked="checked"'; ?>>
        Neither
    </li>
</ul>

        <label for="phone">Phone</label>
        <input type="tel"  name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
      
        <label>Favorite Wines:</label>
<ul>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab',$wines)) echo 'checked="checked"'; ?>>
        Cabernet</li>
        <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot',$wines)) echo 'checked="checked"'; ?>>
        Merlot</li>
        <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah',$wines)) echo 'checked="checked"'; ?>>
        Syrah</li>
        <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec',$wines)) echo 'checked="checked"'; ?>>
        Malbec</li>
        <li><input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red',$wines)) echo 'checked="checked"'; ?>>
        Red Blend</li>
</ul>

<label >Region</label>
        <select name="region">
            <option value="" <?php if(isset($_POST['region']) && is_null($_POST['region'] )) echo 'selected="unselecte"'; ?>>Select One</option>
            <option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] =="nw") echo 'selected="selecte"'; ?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] =="sw") echo 'selected="selecte"'; ?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] =="mw") echo 'selected="selecte"'; ?>>Midwest</option>
            <option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] =="ne") echo 'selected="selecte"'; ?>>Northeast</option>
            <option value="se" <?php if(isset($_POST['region']) && $_POST['region'] =="se") echo 'selected="selecte"'; ?>>Southeast</option>
        
        </select>
      


        <label >Comments</label>
        <textarea  name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>

        <label >I agree to the privacy policy</label>
        <ul>
        <li><input type="radio"  name="privacy" value="yes"<?php if(isset($_POST['privacy'])&& $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li></ul>
        
        
        <input type="submit" value="Send it!">
        <br>
        <p><a href="">Reset</a></p>
    </fieldset>
</form>

</body>
</html>


