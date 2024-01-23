<?php
// our wine list , would it not be an array of wines???
echo '<h2>This will be my wine list</h2>';
$wines = array(
    'cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'

);
//since we can not echo our wines array , we will be using a foreach loop!
echo '<ul>';
foreach ($wines as $key){
    echo '<li>'.$key. '</li>';
}echo '</ul>';
echo '<h2> movies and Shows list which will have both a key and a value </h2>';
$shows =[
    'Apple TV' =>  'Severance ',
    'Apple TV' =>  'For All Mankind ',
    'Showtime' =>  'City on a Hill',
    'Showtime' =>  'Homeland',
    'Movie' =>  'top Gun Maverick',
    'HBO MAX' =>  'Hacks'
];

echo '<h2>Movies and Shows list which will have both a key and a value</h2>';
$shows = [
    'Apple TV' =>  ['Severance', 'For All Mankind'],
    'Showtime' =>  ['City on a Hill', 'Homeland'],
    'Movie' =>  ['Top Gun Maverick'],
    'HBO MAX' =>  ['Hacks']
];

// Display shows using nested foreach loops
echo '<ul>';
foreach ($shows as $platform => $titles) {
    echo '<li>' . $platform . '<ul>';
    foreach ($titles as $title) {
        echo '<li>' . $title . '</li>';
    }
    echo '</ul></li>';
}
echo '</ul>';
echo '<h2>Time for our navigation that will again have both a key and a value </h2>';
$nav = array (
    'index.php'=>'Home',
    'about.php'=>'About',
    'daily.php'=>'Daily',
    'project.php'=>'Project',
    'contact.php'=>'Contact',
    'gallery.php'=>'Gallery',
);
echo '<ul>';
foreach ($nav as  $key =>  $value){
    echo '<li><a href=" '. $key.' " > ' .$value.' </a></li>'; 
}echo '</ul>';