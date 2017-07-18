<?php

function task1($arr, $f)
{
    if ($f == false) {
        $str = '';
        for ($i = 0; $i <= count($arr); $i++) {
            $str = $str . '<p>' . $arr[$i] . '</p>';
        }
    }
    if ($f == true) {
        $str = implode(",", $arr); //обьедили массив в строку через запятую
    }
    return $str;
}

?>