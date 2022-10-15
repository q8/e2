<!doctype html>
<html lang='en'>

<head>
    <title>6 or 8 Sided Dice Roll</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>6 or 8 Sided Dice Roll</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player selects dice size. Either 6 sided or 8 sided dice.</li>
        <li>The winner is the one who lands on the highest value side of the dice.</li>
        <li>If both rolls result in the same value side of the dice, both dice will be rolled again until a winner
            emerges.</li>
    </ul>

    <h2>Play</h2>
    <form method='get' action="index.php">
        Pick a dice size:
        <label><input type='radio' name='choice' value='sixSided'>6</label>
        <label><input type='radio' name='choice' value='eightSided'>8</label>
        <input type='submit' value='Roll!'>
    </form>

    <h2>Results</h2>
    <ul>
        <li>Player rolled: <?php echo $player["roll"]; ?></li>
        <li>Computer rolled: <?php echo $computer["roll"]; ?></li>
        <li>The winner is: <?php echo $winner; ?></li>
    </ul>

</body>

</html>