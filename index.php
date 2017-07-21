<?php
require "functions.php";

echo "<p> <b> Задание №1 </b> </p>";
$a = false;
$mas = array("foo", "bar", "hallo", "world");
$t = task1($mas, $a);
echo $t;

echo "<p> <b> Задание №2 </b> </p>";
$arithmetic = "+";
$b = array(6, 4 , 2);
task2($b, "+");
echo '<br>';
task2($b, "-");
echo '<br>';
task2($b, "*");
echo '<br>';
task2($b, "/");
echo '<br>';
task2($b, "%");
echo '<br>';
task2($b, "**");
echo '<br>';
task2($b, null);
echo '<br>';
task2(null, "+");
echo '<br>';

echo "<p> <b> Задание №3 </b> </p>";
task3("+", 7, 8.7, 9);
echo '<br>';
task3("-", 8, 9);
echo '<br>';
task3("*", 7.54, 8, 9);
echo '<br>';
task3("/", 80.3, 9);
echo '<br>';
task3("%", 10, 5, 2);
echo '<br>';
task3("**", 10, 9);

echo "<p> <b> Задание №4 </b> </p>";
task4("f",3);
echo '<br>';
task4(5,4);
echo '<br>';

echo "<p> <b> Задание №5 </b> </p>";
task5("люба аб");



?>