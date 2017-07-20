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
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "-";
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "*";
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "/";
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "%";
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "**";
task2($b, $arithmetic);
echo '<br>';

$arithmetic = null;
task2($b, $arithmetic);
echo '<br>';

$arithmetic = "+";
$b = null;
task2($b, $arithmetic);
echo '<br>';
?>