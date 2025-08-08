<?php
    declare(strict_types=1);   // here 1 means true in boolean
    include 'includes/AutoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="includes/calc.inc.php" method="post">
        <p>My Own Simple Calculator</p>
        <input type="number" name="num1" placeholder="Enter Number One:">
        <select name="operator" id="operator">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Enter Number Two:">
        <button type="submit" name="submit">Calculate</button>

    </form>

</body>
</html>