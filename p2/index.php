<?php
$selection = $_GET['choice'];

$player = ["name" => "Player", "roll" => null];
$computer = ["name" => "Computer", "roll" => null];

if ($selection == 'sixSided') {
    $sixSides = range(1, 6);
    shuffle($sixSides);

    $player["roll"] = $sixSides[0];
    $computer["roll"] = $sixSides[1];
} else if ($selection == 'eightSided') {
    $eightSides = range(1, 8);
    shuffle($eightSides);

    $player["roll"] = $eightSides[0];
    $computer["roll"] = $eightSides[1];
}

$winner = match (max($player["roll"], $computer["roll"])) {
    $player["roll"] => $player["name"],
    $computer["roll"] => $computer["name"],
};

require('index-view.php');