<?php
    include 'includes/StaticPropertiesAndMethods.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo Human::$drinkingAge . "<br>";

        Human::setDrinkingAge(18);

        echo Human::$drinkingAge . "<br>";

        $obj1 = new Human("Sajjal", "Jet Black", 25);

        print $obj1->getDrinkingAge();
    ?>

</body>
</html>