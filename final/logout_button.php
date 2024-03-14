<!-- logout_button.php -->
<?php
session_start();
?>
<form action="logout.php" method="post">
    <button type="submit" name="logout_user" class="logout-button">Logout</button>
</form>
