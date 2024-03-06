<?php
session_start();
include('config.php');
include('./includes/header.php');

// Define current page variable
$current_page = basename($_SERVER['PHP_SELF']);
// Navigation links array
$nav = array(
    'index.php' => 'Home',
    'contact.php' => 'Contact'
);

?>


<div id="wrapper">
    <main>
        <h1>Welcome to our contact page.</h1>
        <?php include('./includes/form.php'); ?>
    </main>
</div>

<?php
// Check if user is logged in and on the contact page
if(isset($_SESSION['username']) && $current_page == 'contact.php'){
    // Display the logout button if the user is logged in and on the contact page
    include('logout_button.php');
}

// Include the footer
include('./includes/footer.php');
?>



   