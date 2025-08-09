<?php
    declare(strict_types=1);   // here 1 means true in boolean
    include 'AutoLoader.inc.php';

    $operator = $_POST['operator'];
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

    $newCal = new Calclulator($operator, (int)$number1, (int)$number2);

    try{
        print $newCal->calculate();
    }
    catch(TypeError $e){
        echo "Error!: " . $e->getMessage();
    }

?>
