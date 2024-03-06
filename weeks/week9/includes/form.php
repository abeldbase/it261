<form action="contact.php" method="post">
<?php
ob_start();
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$comments = '';
$privacy = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

   

    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = 'invalid format';
        } else {
            $phone = $_POST['phone'];
        }
    }
 

    if (empty($_POST['comments'])) {
        $comments_err = 'We value your input ';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You must agree to receive spam email!';
    } else {
        $privacy = $_POST['privacy'];
    } 

    if (isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['comments'],
        $_POST['privacy'])) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on ' . date('m/d/y, h i A');
        $body = '
    First Name: ' . $first_name . '  ' . PHP_EOL . '
    Last Name: ' . $last_name . '  ' . PHP_EOL . '
    Email: ' . $email . '  ' . PHP_EOL . '
    Phone: ' . $phone . '  ' . PHP_EOL . '
    Comments: ' . $comments . '  ' . PHP_EOL . '
    Privacy: ' . $privacy . '  ' . PHP_EOL . '
    ';
        $headers = array(
            'From' => 'noreply@studentswa.com'
        );

        if (!empty(
            $first_name &&
            $last_name &&
            $email &&
            $phone &&
            $comments &&
            $privacy) &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    }
}
?>

<style>

        /* Styles for my week6 form1.php */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: beige;
}

h1 {
    text-align: center;
    margin: 20px;
}

form {
    width: 500px;
    margin: 30px auto;
}

fieldset {
    padding: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type=text],
input[type=email],
input[type=tel]{
    width: 100%;
    margin-bottom: 10px;
   
}
textarea{
    width: 100%;
    resize: none;
    height: 80px;
    margin-bottom: 10px;
}
select {
    width:auto;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    margin-bottom: 10px;
    margin-left: 5px;
}

li {
    margin-bottom: 5px;
}

input[type=checkbox],
input[type=radio] {
    margin-right: 5px;
}

input[type=submit],
input[type=reset] {
    margin-top: 10px;
}

.error-message {
    color: red;
}

</style> 

<h1>Contact form  </h1>

    <fieldset>
        <legend>Contact us</legend>
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span class="error-message"><?php echo $first_name_err; ?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span class="error-message"><?php echo $last_name_err; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error-message"><?php echo $email_err; ?></span>

        <label for="phone">Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error-message"><?php echo $phone_err; ?></span>
        <label>Comments</label>
        <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <span class="error-message"><?php echo $comments_err; ?></span>

        <label>I agree to the privacy policy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li>
            <span class="error-message"><?php echo $privacy_err; ?></span></ul>
        <input type="submit" value="Send it!"><br>
        <br>
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
