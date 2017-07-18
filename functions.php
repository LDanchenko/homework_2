<?php


function task1 ($arr, $f){
    if ($f == false) {
        for ($i = 0; $i <= count($arr); $i++) {
            echo "<p>";
            echo($arr[$i]);
            echo "</p>";
        }
    }
    if ($f == true) {
        $str = implode(",", $arr); //обьедили массив в строку через запятую
        echo $str;
        return $str;
    }
}

$a = true;
$mas = array("foo", "bar", "hallo", "world");
task1($mas, $a);
?>