<?php
// declare(strict_types=1);
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

    try {
        $h1 = new House();
        // $h1->setAddressName(2566);
        $h1->setAddressName("Tali Muhalla Bwp");
        print $h1->getAddressName();
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    }

    ?>

</body>

</html>