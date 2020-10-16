<?php 
$family = array('Chantal','Sandy','Stacy','Robby');

echo '<pre>';
print_r($family);
echo '</pre>';

var_dump($family);

$me = array(
    'firstname' => 'Robby',
    'age' => 34,
    'season' => 'summer',
    'soccer' => true,
    'hobbies' => array('Coding','Geeking', 'drinking')
);
$mother = array(
    'firstname' => 'Chantal',
    'age' => 63,
    'season' => 'winter',
    'soccer' => false,
    'hobbies' => array('Looking Tv','Chating Facebook', 'other')
);
$soulmate = array(
    'firstname' => 'euuhhhh',
    'age' => 24,
    'season' => 'summer',
    'soccer' => true,
    'hobbies' => array('Geeking','Reading', 'Walking')
);
echo '<pre>';
print_r($mother);
echo '</pre>';

echo '<pre>';
print_r($me);
echo '</pre>';

echo count($mother['hobbies'])."\n&Me " .count($me['hobbies']);

$me['hobbies'][] = 'Taxidermy';

echo '<p> new Me </p>';
echo '<pre>';
print_r($me);
echo '</pre>';


$possible_hobbies_via_intersection = array_intersect($me['hobbies'],$soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'],$soulmate['hobbies']);

echo '<p> new Me </p>';
echo '<pre>';
print_r($possible_hobbies_via_merge);
print_r($possible_hobbies_via_intersection);
echo '</pre>';
?>
<a href="./../../index.php">RETURN INDEX </a>