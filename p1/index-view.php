<!doctype html>
<html lang='en'>

<head>
    <title>Three Player Dice Roll</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>Three Player Dice Roll</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>All Players roll a 6 sided dice.</li>
        <li>The winner is the player who lands on the highest value side of the dice.</li>
        <li>If two or more players roll the same highest value side of the dice, the players roll again until 1 player
            emerges as the winner.</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Player 1 rolled: <?php echo $player1[1]; ?></li>
        <li>Player 2 rolled: <?php echo $player2[1]; ?></li>
        <li>Player 3 rolled: <?php echo $player3[1]; ?></li>
        <li>The winner is: <?php echo $winner; ?></li>
    </ul>

</body>

</html>