<?php
    include 'includes/ConstructorsAndDestructors.php'
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
        $person1 = new Person("Malik", "Black", 25);

        echo $person1->name;
        echo "<br>";
        echo $person1->eyeColor;
        echo "<br>";
        echo $person1->age;
        echo "<br>";
        
        $person1->setName("Bhatti");

        echo $person1->getName();

    ?>
    
</body>
</html>