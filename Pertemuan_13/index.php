<?php
    $t = date("H");
    if($t < "20"){
        echo "Have a good day!";
    }
    
    echo "<br><br>";

    $t = date("H");
    if($t < "20"){
        echo "Have a good day!";
    }else{
        echo "Have a good night!";
    }

    echo "<br><br>";

    $t = date("H");
    if($t < "10"){
        echo "Have a good morning!";
    }else if ($t<"20"){
        echo "Have a good day!";
    }else{
        echo "Have a good night!";
    }

    echo "<br><br>";

    $favcolor = "red";
    switch ($favcolor){
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green" :
            echo "Your favorite color is green!";
            break;
        default :
        echo "Your favorite color is neither red, blue, nor green!";
    }

    echo "<br><br>";

    $x = 1;
    while ($x<=5){
        echo "The number is : $x <br>";
        $x++;
    }

    echo "<br><br>";

    $x = 1;
    do{
        echo "The number is : $x <br>";
        $x++; 
    }while ($x<=5);

    echo "<br><br>";

    for($x=0; $x <= 10; $x++){
        echo "The number is : $x <br>";
    }

    echo "<br><br>";

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value){
        echo "$value <br>";
    }

    echo "<br><br>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . ", and " . $cars[2] . ".";

    echo "<br><br>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);

    echo "<br><br>";

    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for ($x=0; $x<$arrlength; $x++){
        echo $cars[$x] . "<br>";
    }

    echo "<br><br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age["Peter"] . " years old.";

    echo "<br><br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach($age as $x => $x_value){
        echo "Key = " . $x . ", Value = " . $x_value . "<br>";
    }

    echo "<br><br>";

    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Lan Rover", 17, 15)
    );
    for ($row = 0; $row<4; $row++){
        echo "<p><b> Row number $row </b></p>";
        echo "<ul>";
        for ($col=0; $col<3; $col++){
            echo "<li>" . $cars[$row][$col] . ". </li>";
        }
        echo "</ul>";
    }
?>