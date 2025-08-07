<?php
    include 'includes/PropertiesAndMethods.php';
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
        // $name01 = "Hamza";
        // $eyeColor = "Black";
        // $age01 = 28;

        // $name01 = "Dawood";
        // $eyeColor = "Black";
        // $age01 = 25;

        $person1 = new Person();
        
        $person1->setName("Malik ");
        
        echo $person1->name;


        $person2 = new Person();
        
        $person2->setName(" Bhatti");
        
        echo $person2->name;

    ?>
</body>
</html>