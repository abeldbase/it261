<?php
include('config.php');
include('./includes/header.php');
?>

<?php

$state['Flag_of_Arizona']='AZ_nickname The Grand Canyon State.';
$state['Flag_of_Arkansas']='AR_nickname The Natural State.';
$state['Flag_of_Colorado']='CO_nickname Centennial State.';
$state['Flag_of_Connecticut']='CT_nickname Constitution State.';
$state['Flag_of_Delaware']='DE_nickname The First State.';
$state['Flag_of_Illinois']='IL_nickname the Prairie State.';
$state['Flag_of_Michigan']='MI_nickname Wolverine State.';
$state['Flag_of_Nevada']='NE_nickname Silver State.';
$state['Flag_of_Texas']='TX_nickname The Lone Star State.';
$state['Flag_of_Washington']='WA_nickname The Evergreen State';

//variable key ......value
//$name......$image

?>

<style>
    h1 {
        color: blue;
        text-align: center;
        margin-top: 10px;
    }
    table {
        border: 1px solid red;
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-top: 110px; 
    }
    td {
        border: 1px solid white;
    }
</style>

<h2>Welcome to my gallery page.</h2>
  <table>
  
  <?php foreach($state as $name=> $image ) : ?>
    
    <tr>
        <td><img src="images/<?php echo substr($image, 0, 2); ?>.png" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
        <td><?php echo str_replace('_', ' ', $name); ?></td>
    
                <td> <?php 
                         // Extract description and nickname
                        $description_start = strpos($image, '_nickname') + strlen('_nickname');
                        $description_end = strpos($image, ' ', $description_start);
                        $description = substr($image, $description_start, $description_end - $description_start);
                        $nickname = substr($image, $description_end + 1);
                        echo $description . ' ' . $nickname;
                    ?>
                </td>
    </tr>
<?php endforeach; ?>
  </table>
<?php include('./includes/footer.php')?>
