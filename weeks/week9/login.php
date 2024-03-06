<?php include('server.php'); ?>
<?php include('./includes/header.php'); ?>
<main>   
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h2>Login</h2>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="login_user" class="btn">Login</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
    <p>Haven't registered? <a href="register.php">Register here</a></p>
    <?php include('errors.php'); ?>
</form> 
</main>
<?php include('./includes/footer.php'); ?>
