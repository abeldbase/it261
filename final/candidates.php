<?php
session_start(); // Start the session to access session variables

include('config.php');
include('header.php');

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<div class="user-info">
    <p>Hello, <?php echo $_SESSION['username']; ?>! You are logged in.</p>
    <!-- <form action="logout.php" method="post">
        <button type="submit" name="logout_user" class="logout-button">Logout</button>
    </form> -->
</div>
<main>
    <h1>Welcome to our Candidates Page</h1><br>
    <?php
    // Database connection and query to fetch candidates
    $sql = 'SELECT * FROM candidates';
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <h2>Candidate: ' . $row['first_name'] . ' ' . $row['last_name'] . '</h2><br>
                <ul>
                    <li><strong>Candidate Statement:</strong> ' . $row['cand_state'] . '</li><br>
                    <li><strong>Race:</strong> ' . $row['race'] . '</li>
                </ul>
                <p> For more information about ' . $row['first_name'] . ', click <a href="candidates-view.php?id=' . $row['candidates_id'] . '">here</a></p><br>
            ';
        }
    } else {
        echo 'Nobody home!!!';
    }// Free result and close connection
    mysqli_free_result($result);
    mysqli_close($iConn);
    ?>
</main>
<aside><!-- Sidebar content can go here -->
</aside>

<?php include('footer.php'); ?>


