<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR PHP</title>
</head>
<body>
<?php 
echo "Hello world <br>" ;

// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block 
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5 . "<br>";
echo $x;

$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";

$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt . "<br>";
echo $x . "<br>";
echo $y . "<br>";

$txt = "PPW1";
echo "I love $txt!<br>";

$txt = "PPW1";
echo "I love" . $txt . "!<br>";

$x = 5;
$y = 4;
echo $x + $y . "<br>";

echo strlen("Hello world!") . "<br>";
echo str_word_count("Hello world!") . "<br>";
echo strrev("Hello world!") . "<br>";
echo strpos("Hello world!", "world") . "<br>";
echo str_replace("world", "Dolly", "Hello world!") . "<br>";


function writeMsg(){
    echo "Hello world! <br>";
}
writeMsg();

function familyName1($fname){
    echo "$fname Jaeger. <br>";
}
familyName1("Jani");
familyName1("Hege");
familyName1("Stale");
familyName1("Kai Jim");
familyName1("Borge");

function familyName2($fname, $year){
    echo "$fname Jaeger. Born in $year <br>";
}
familyName2("Hege", 1975);
familyName2("Stale", "1978");
familyName2("Kai Jim", 1983);

function setHeight($minheight = 50){
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum($x, $y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";
?>
</body>
</html>