<?php 
//require 'states.php';
//
//
//
//while($i<=5 ) 
//    {
//    echo $us_state_abbrevs_names[$i] . "\n";
//    $i++;
//}
//?>


//<?php
//require 'states.php';
//
//$sort = sort($us_state_abbrevs_names ['states']);
//
//echo $sort;
//
//
//$asort = asort($us_state_abbrevs_names ['countries']);
//
//echo $asort;
//
//$i = 0;
//
//do {
// $i++;
//  echo $us_state_abbrevs_names[$i];
//} 
//while ($i = $sort);


require 'states/states.php';

$states = $us_state_abbrevs_names['states'];

$state_codes = array();
$state_values = array();

foreach ($states as $state_k => $state_v) {
    $state_codes[] = $state_k;
    $state_values[] = $state_v;
}

sort($state_codes);
sort($state_values);

$sorted_states = array();

$i = 0;

foreach ($state_codes as $state_code) {
    $sorted_states[$state_code] = $state_values[$i];
    $i++;
}

var_dump($sorted_states);

$countries = $us_state_abbrevs_names['countries'];
rsort($countries);

var_dump($countries);
var_dump($countries);

?>


