<?php
session_start(); // Start the session to access session variables

include('config.php');
include('header.php');

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = strtoupper($_SESSION['username']);
?>
<div class="user-info">
   
    <p>Hello, <?php echo $_SESSION['username']; ?>! You are logged in.</p>
    <!-- <form action="logout.php" method="post">
        <button type="submit" name="logout_user" class="logout-button">Logout</button>
    </form> -->
</div>
<main>
    <h1>Welcome to our about Page</h1><br>
    <p>The table contains information about candidates for the 2024 presidential race from both the Democratic and Republican parties. It includes details such as their names, party affiliations, campaign statuses, past experiences, educational backgrounds, campaign statements, contact details, and website links. Some candidates have suspended their campaigns. Note: Some rows have been removed for demonstration purposes due to the large table size.</p>
    
   <img src="./images/screenshot.png">
</main>
<aside>
</aside>

<?php include('footer.php'); ?>

