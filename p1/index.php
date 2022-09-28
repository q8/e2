<?php
$sides = range(1,6);
shuffle($sides);

$player1 = ["Player 1", $sides[0]];
$player2 = ["Player 2", $sides[1]];
$player3 = ["Player 3", $sides[2]];

$winner = match(max($player1[1],$player2[1],$player3[1])){
    $player1[1] => $player1[0],
    $player2[1] => $player2[0],
    $player3[1] => $player3[0],
};

require('index-view.php');