<?php
    // declare(strict_types=1);   // here 1 means true in boolean
    include 'includes/AutoLoader.inc.php';
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
        $usersViewObj = new UsersView();
        $usersViewObj->showUser('John'); 
        
        $usersViewObj2 = new UsersController();
        $usersViewObj2->createUser('Duraid', 'Malik', '06-06-2024');

    ?>

</body>
</html>