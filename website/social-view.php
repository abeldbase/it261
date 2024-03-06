<?php

// do not call out the header include yet!!
// the following information is above the doctype

include('config.php');
// is ID set ????
if (isset($_GET['id'])){
    $id =(int)$_GET['id'];
}else{
    header('Location: social.php');
}
$sql ='SELECT * FROM social WHERE social_id =' . $id;
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $social_media_platform = stripslashes($row['social_media_platform']);
        $website = stripslashes($row['website']);
        $company = stripslashes($row['company']);
        $rank = stripslashes($row['rank']);
        $country = stripslashes($row['country']);
        $launched = stripslashes($row['launched']);
        $founders = stripslashes($row['founders']);
        $headquarters = stripslashes($row['headquarters']);
        $revenue = stripslashes($row['revenue']);
        $active_users = stripslashes($row['active_users']);
        $blurb = stripslashes($row['blurb']);
        $more =  stripslashes($row['more']);
        // will I add a column ?
        $feedback = '';
    }//close while loop
}else {
    $feedback = 'Houston, we have a problem';
}
include('./includes/header.php');
?>
 
<main style="width: 62%; background: lightblue; float: left; margin-left: 20px; margin-top: 200px; margin-bottom: 20px; padding: 20px; text-align: justify;">
    <h1>Top Social Media Platforms Marketers Should Know!</h1>
    <h2>Introducing: <?php echo $social_media_platform; ?></h2>
    <ul>
        <?php
        echo '
        <li><b>Social Media Platform:</b> ' . $social_media_platform . '</li>
        <li><b>Website:</b> ' . $website . '</li>
        <li><b>Parent Company:</b> ' . $company . '</li>
        <li><b>Rank:</b> ' . $rank . '</li>
        <li><b>Country:</b> ' . $country . '</li>
        <li><b>Year launched:</b> ' . $launched . '</li>
        <li><b>Founders:</b> ' . $founders . '</li>
        <li><b>Headquarters Location:</b> ' . $headquarters . '</li>
        <li><b>Active Users in a month:</b> ' . $active_users . '</li>';
        ?>
    </ul>
    <p><?php echo $more; ?></p>
    <p>Return to our <a href="social.php">Social Media Platforms Page</a></p>
</main>
<aside style= "margin-top: 200px;margin-right: 20px margin-bottom: 20px; padding: 20px;">
    <h3>Aside information that will display our social media's image!</h3>
    <figure>
        <img src="./images/social<?php echo $id; ?>.jpg" alt="<?php echo $social_media_platform; ?>">
        <figcaption>
            <?php echo $blurb; ?>
        </figcaption>
    </figure>
    <iframe width="400" height="440"  src="https://rss.app/embed/v1/carousel/tn1h2oG9RNc5X2N8" frameborder="0"></iframe>
</aside>
<!-- </div> -->
<!-- end wrapper -->
<?php
include('./includes/footer.php');
?>
