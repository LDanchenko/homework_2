<?php
require "functions.php";

echo "<p> <b> Задание №1 </b> </p>";
$a = false;
$mas = array("foo", "bar", "hallo", "world");
$arr = task1($mas, $a);
echo $arr;

echo "<p> <b> Задание №2 </b> </p>";
$arithmetic = "+";
$b = array(6, 4, 2);
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
task4("f", 3);
echo '<br>';
task4(5, 4);
echo '<br>';

echo "<p> <b> Задание №5 </b> </p>";
echo '<br>';
task5_2(task5_1("А роза упала на лапу Азора"));
echo '<br>';
task5_2(task5_1("Язык Php"));
echo '<br>';

echo "<p> <b> Задание №6 </b> </p>";
echo '<br>';
task6();

echo "<p> <b> Задание №7 </b> </p>";
echo '<br>';
task7('Карл у Клары украл Кораллы', "Две бутылки лимонада");


echo "<p> <b> Задание №8 </b> </p>";
echo '<br>';
$str = 'RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.';
echo 'Строка: ' . $str;
task8($str);
echo '<br>';
$str = 'RX packets:950381 errors:0 dropped:0 overruns:0 frame:0 :)';
echo 'Строка: ' . $str;
task8($str);

echo "<p> <b> Задание №9 </b> </p>";
echo '<br>';
$text = task9();
echo '' . $text;

echo "<p> <b> Задание №10 </b> </p>";
echo '<br>';
task10();
?>