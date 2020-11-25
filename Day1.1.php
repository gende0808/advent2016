<?php

$instructions = explode(", ",file_get_contents("Day1.txt"));


$direction = 0;
$grid = array();
$locationy = 0;
$locationx = 0;
foreach($instructions as $instruction){
    $amountOfSteps = substr($instruction, 1);
    switch($instruction[0]) {
        case "L":
            if($direction > 0){
                $direction--;
            }
            else{
                $direction = 3;
            }
            break;
        case "R":
            if($direction < 3){
                $direction++;
            }
            else{
                $direction = 0;
            }
            break;
    }
    switch($direction){
        case 0:
            $locationy += $amountOfSteps;
            break;
        case 1:
            $locationx += $amountOfSteps;
            break;
        case 2:
            $locationy -= $amountOfSteps;
            break;
        case 3:
            $locationx -= $amountOfSteps;
            break;
    }

}
echo $locationx;
echo $locationy;
