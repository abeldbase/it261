<?php

$people['Donald_Trump']='trump_Former President from NY.';
$people['Joe_Biden']='biden_President from PH.';
$people['Hilary_Clinton']='clint_Secretary from NY.';
$people['Bernie_Sanders']='sande_Senator from VT.';
$people['Elizabeth_Warren']='warre_Senator from MA.';
$people['Kamila_Harris']='harri_Vice President from CA.';
$people['Cory_Booker']='booke_Senator from NJ.';
$people['Andrew_Yang']='ayang_Entrepreneur from NY.';

$people['Pete_Buttigieg']='butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar']='klobu_Senator from MN.';
$people['Julian_Castro']='castr_Former Housing/Urban from TX.';
//variable key ......value
//$name......$image

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class  exercise - pictures </title>
    <style>

table{
    border:1px solid red;
    border-collapse:collapse;
    margin-bottom: 20px;

}
td{
    border:1px solid red;
 
}

    </style>
</head>
<body>
  <table>
  <?php foreach($people as $name=> $image ) : ?>
    <tr>
        <td><img src="images/images2/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
        <td><?php echo str_replace('_', ' ', $name); ?></td>
        <td><?php 
            $from_position = strpos($image, 'from');
            // Extract the occupation with "from" 
            $occupation = substr($image, strpos($image, '_') + 1, $from_position - strpos($image, '_') - 1 + strlen('from'));
            // Extract the location
            $location = substr($image, $from_position + 5);
            echo $occupation . ' ' . $location;
        ?></td>
         
</tr>

<?php endforeach; ?>


  </table>
</body>
</html>


