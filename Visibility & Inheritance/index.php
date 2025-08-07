<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $object = new Pet;

        echo $object->owner();

        $p2 = new Pet;

        echo $p1->hello();
        
        $p1 = new Person;

        echo $p1->owner();

    ?>
    
</body>
</html>