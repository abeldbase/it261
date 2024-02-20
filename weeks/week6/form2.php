<?php

ob_start();

$first_name ='';
$last_name='';
$gender='';
$email='';
$phone='';
$wines = '';
$region='';
$comments='';
$privacy='';

$first_name_err = '';
$last_name_err = '';
$gender_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$region_err = '';
$comments_err = '';
$privacy_err = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if inputs are empty , we will delear a statement else we will assigen the $_POSTS to variable 
    //$wines = $_POST['wines']
  
    if (empty($_POST['first_name'])) {
        //say something or do something 
$first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        //say something or do something 
$last_name_err = 'Please fill in your last name';
    } else {
        $last_name= $_POST['last_name'];
    }

    if (empty($_POST['gender'])) {
        //say something or do something 
$gender_err = 'Please check your gender ';
    } else {
        $gender= $_POST['gender'];
    }

    if (empty($_POST['email'])) {
        //say something or do something 
$email_err ='Please fill in your email';
    } else {
        $email= $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        //say something or do something 
$phone_err ='Please fill your phone number';
    } else {
        $phone= $_POST['phone'];
    }
    if (empty($_POST['wines'])) {
        //say something or do something 
$wines_err ='What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }
if($_POST['region'] == NULL ) {
        //say something or do something 
$region_err ='Please choose your region ';
    } else {
        $region= $_POST['region'];
    }
    if (empty($_POST['comments'])) {
        //say something or do something 
$comments_err ='We value your input ';
    } else {
        $comments= $_POST['comments'];
    }
    if (empty($_POST['privacy'])) {
        //say something or do something 
$privacy_err ='You must agree to recive spam email!';
    } else {
        $privacy= $_POST['privacy'];
    }

function my_wines($wines) {
        $my_return='';
        if(!empty($_POST['wines'])) {
            $my_return = implode(',', $_POST['wines']);
        }
return $my_return;       
} // end my_wines function 
       
if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['region'],
$_POST['comments'],
$_POST['privacy'])){
    $to ='abeldbase@gmail.com';
    $subject = 'Test eamil on '.date('m/d/y, h i A');
    $body = '   
    First Name: '.$first_name.'  '.PHP_EOL.' 
    Last Name: '.$last_name.'  '.PHP_EOL.' 
    Email: '.$email.'  '.PHP_EOL.' 
    Gender: '.$gender.'  '.PHP_EOL.' 
    Phone: '.$phone.'  '.PHP_EOL.' 
    Wines: '.my_wines($wines).'  '.PHP_EOL.' 
    Region: '.$region.'  '.PHP_EOL.' 
    Comments: '.$comments.'  '.PHP_EOL.' 
    Privacy: '.$privacy.'  '.PHP_EOL.' 
    ';
    $headers = array(
        'From' => 'noreply@gmail.com'
    ); 
    
    //we will be adding an if statement - that this email will work ONLY if all the fields are filled out!!!

if (!empty(
        $first_name &&
        $last_name &&
        $email &&
        $gender &&
        $phone &&
        $wines &&
        $region &&
        $comments &&
        $privacy )){
    // Send email
    mail($to, $subject, $body, $headers);
    // Redirect to thank you page
    header('Location: thx.php');

}
// don't forget , you must upload your form onto the server to recive an email !!!
}
}// closing server request method 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title>Form 2</title>  
</head>
<body>
    <h1>Second form in week 6 </h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">  
    <fieldset>
        <legend>Contact Abel</legend>
        <label >First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ; ?>">
        <span class="error-message"><?php echo $first_name_err ;?></span>

        <label >Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ; ?>">
   
        <span class="error-message"><?php echo $last_name_err ;?></span>
        <label >Email</label>
        <input type="email"  name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ; ?>">
        <span class="error-message"><?php echo $email_err ;?></span>
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
<span class="error-message"><?php echo $gender_err ;?></span>
        <label for="phone">Phone</label>
        <input type="tel"  name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error-message"><?php echo $phone_err ;?></span>
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
<span class="error-message"><?php echo $wines_err ;?></span>
<label >Region</label>
        <select name="region">
            <option value="" <?php if(isset($_POST['region']) && is_null($_POST['region'] )) echo 'selected="unselecte"'; ?>>Select One</option>
            <option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] =="nw") echo 'selected="selecte"'; ?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] =="sw") echo 'selected="selecte"'; ?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] =="mw") echo 'selected="selecte"'; ?>>Midwest</option>
            <option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] =="ne") echo 'selected="selecte"'; ?>>Northeast</option>
            <option value="se" <?php if(isset($_POST['region']) && $_POST['region'] =="se") echo 'selected="selecte"'; ?>>Southeast</option>  
        </select>
      <br><span class="error-message"><?php echo $region_err ;?></span>
        <label >Comments</label>
        <textarea  name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <span class="error-message"><?php echo $comments_err ;?></span>
        <label >I agree to the privacy policy</label>   
        <ul>
        <li><input type="radio"  name="privacy" value="yes"<?php if(isset($_POST['privacy'])&& $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li>
        <span class="error-message"><?php echo $privacy_err ;?></span></ul>     
        <input type="submit" value="Send it!"><br>
        <br>
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
</body>
</html>


