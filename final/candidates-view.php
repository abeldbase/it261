<?php
session_start(); 
include('config.php');
include('header.php');
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
// Check if ID is set and sanitize it
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: candidates.php');
     // Stop further execution
}

$sql = 'SELECT * FROM candidates WHERE candidates_id =' .$id. ' ';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $full_name = stripslashes($row['first_name']) . ' ' . stripslashes($row['last_name']);
        $race = stripslashes($row['race']);
        $term_type = stripslashes($row['term_type']);
        $cand_state = stripslashes($row['cand_state']);
        $district_type = stripslashes($row['district_type']);
        $education = stripslashes($row['education']);
        $com_service = stripslashes($row['com_service']);
        $contact = stripslashes($row['contact']);
        $website = stripslashes($row['website']);
        $statement = stripslashes($row['statement']);
        $elected_experi = stripslashes($row['elected_experi']);
        $other_pro_expe = stripslashes($row['other_pro_expe']);
$feedback = '';
    }
} else {
    $feedback = 'Houston, we have a problem';
}

?>
<div class="user-info">
    <p>Hello, <?php echo $_SESSION['username']; ?>! You are logged in.</p>
</div>
<main>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        nav{
            z-index: -1;
        }
        main {
    width: 70%;
    float: left;
}

        /* main {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        h1, h2, h3 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        aside {
    width: 30%;
    float: right;
}

/* Image Styles */
img {
    max-width: 100%;
    height: auto;
}


/* 
        aside {
            width: 30%;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        figure {
            margin: 0;
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        figcaption {
            font-size: 14px;
            color: #666;
            text-align: center;
        } */
    </style>
    <h1>Welcome to our Candidates View Page</h1>
    <h2>Introducing: <?php echo $full_name; ?></h2>
    <ul>
        <?php
        echo '
        <li><b>Full Name:</b>' . $full_name . '</li>
        <li><b>Race:</b>' . $race . '</li>
        <li><b>Term Type:</b>' . $term_type . '</li>
        <li><b>Candidate Statement:</b>' . $cand_state . '</li>
        <li><b>District Type:</b>' . $district_type . '</li>
        <li><b>Education :</b>' . $education . '</li>
        <li><b>Community Service:</b>' . $com_service . '</li>
        <li><b>Contact:</b>' . $contact . '</li>
        <li><b>Website:</b>' . $website . '</li>
        <li><b>Statement:</b>' . $statement . '</li>
        <li><b>Elected Experience:</b>' . $elected_experi . '</li>
        <li><b>Other Professional Experience:</b>' . $other_pro_expe . '</li>
        ';
        ?>
    </ul>
    <p><?php echo $contact; ?></p>
    <p>Return to our <a href="candidates.php">Candidates page</a></p>
</main>
<aside>
    <h3>Aside information that will display our person's image!</h3>
    <figure>
        <img src="./images/candidates<?php echo $id; ?>.png" alt="<?php echo $first_name; ?>">
        <figcaption>
        <?php echo $full_name; ?>
        </figcaption>
    </figure>
</aside>
<!-- end wrapper -->

<?php
include('footer.php');
?>
