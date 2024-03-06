<?php

include('config.php');
include('./includes/header.php');
?>
 
<main style="width: 62%; background: lightblue; float: left; margin-left: 20px; margin-top: 160px; margin-bottom: 20px; padding: 20px; text-align: justify;">
    <h1>Top Social Media Platforms Marketers Should Know</h1>
<?php
$sql = 'SELECT * FROM social';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
//we have a row which translates into an array
// if our result is greater than 0 , we are happy
if(mysqli_num_rows($result) > 0) {

// we are going to add while loop
while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['social_media_platform'].'</h2>
    <ul>
    <li>Website: '.$row['website'].'</li>
    <li>Parent company: '.$row['company'].'</li>
    </ul>
    <p> For more information about '.$row['social_media_platform'].', click <a href="social-view.php?id='.$row['social_id'].' ">here</a></p>
    ';
}// end while loop
}else {
    echo 'nobody home!!!';
}
// we are going to relase the server
@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</main>
<aside>
  
</aside>

<!-- </div>  End wrapper -->
<?php
// Include footer
include('./includes/footer.php');
?>
