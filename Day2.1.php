<?php

$instructions = explode(", ", file_get_contents("Day1.txt"));

//Many errors, pls don't judge me
$direction = 0;
$grid = array();
$locationy = 0;
$locationx = 0;
foreach ($instructions as $instruction) {
    $amountOfSteps = substr($instruction, 1);
    switch ($instruction[0]) {
        case "L":
            if ($direction > 0) {
                $direction--;
            } else {
                $direction = 3;
            }
            break;
        case "R":
            if ($direction < 3) {
                $direction++;
            } else {
                $direction = 0;
            }
            break;
    }
    switch ($direction) {
        case 0:
            for ($i = 0; $i < $amountOfSteps; $i++) {
                $locationy++;
                if (@$grid[$locationy][$locationx]) {
                    echo $locationy . " " . $locationx . "<br>";
                }
                $grid[$locationy][$locationx] = "X";
            }
            break;
        case 1:
            for ($i = 0; $i < $amountOfSteps; $i++) {
                $locationx++;
                if ($grid[$locationy][$locationx]) {
                    echo $locationy . " " . $locationx . "<br>";
                }
                $grid[$locationy][$locationx] = "X";
            }
            break;
        case 2:
            for ($i = 0; $i < $amountOfSteps; $i++) {
                $locationy--;
                if ($grid[$locationy[$locationx]]) {
                    echo $locationy . " " . $locationx . "<br>";
                }
                $grid[$locationy][$locationx] = "X";
            }
            break;
        case 3:
            for ($i = 0; $i < $amountOfSteps; $i++) {
                $locationx--;
                if (@$grid[$locationy][$locationx]) {
                    echo $locationy . " " . $locationx . "<br>";
                }
                $grid[$locationy][$locationx] = "X";
            }
            break;
    }
}
echo $locationx;
echo $locationy;
