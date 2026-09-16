<?php
    echo strlen("Hello world!");
    echo strlen("Łódź");
    echo mb_strlen ("Łódź")
?>

<?php
    echo str_word_count("Hello world!");
?>

<?php
    echo str_replace("world","Dolly","Hello World!");
?>

<?php
    echo strpos("Hello World!","World");
?>

$tekst = "Hello";
printf("[%s]\n", $tekst);
printf("[%10s]\n", $tekst);
printf("[%-10s]\n", $tekst);
printf("[%010s]\n", $tekst);

<?php
    $foo = "Bob";
    $bar = &$foo;
    $bar = 'Andy';
    echo $bar;
    echo $foo;
?>
$cars = array("Volvo","BMW","Toyota");
$cars = ["Volvo","BMW","Toyota"];
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
$age = [];
$age["Peter"] = "35";
$age["Ben"] = "37";
$age["Joe"] = "43";

<?php
    $cars = array("Volvo","BMW","Toyota");
    echo "size of cars array: " . count($cars);
?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    
    asort($age);

    ksort($age);

<?php
    $a=array("red","green","blue");
    array_pop($a);
    print_r($a);
?>

<?php
    $a=array("red","green",);
    array_push($a,"yellow","blue");
    print_r($a);
?>

<?php
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_shift($a) . "<br>";
    print_r($a);
?>

<?php
    $a=array("a"=>"red","b"=>"green");
    array_unshift($a,"blue");
    print_r($a);
?>