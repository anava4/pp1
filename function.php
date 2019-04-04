<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$numbers = array (7,9,8,9,8,8,6);
function printArr($numbers)
{
    foreach($numbers AS $arr){
        echo '<pre>'; print_r($arr); '</pre>';
    }
}
printArr($numbers);

function largest($numbers)
{
    echo '<br>';
    echo "Largest number is ";
    echo max($numbers);
}

largest($numbers);

function average($numbers)
{
    echo '<br>';
    $average= array_sum($numbers) / count($numbers);
    echo "Average is ";
    echo $average;
}
average($numbers);


?>