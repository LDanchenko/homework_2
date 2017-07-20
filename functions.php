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

function task2($arr, $str1)
{

    echo "<br>";
    echo 'Массив: ';
    print_r($arr);
    echo "<br>";
    echo 'Операция ' .$str1;
    echo '<br>';
    if (empty($arr) or empty($str1)) {

        echo 'Не задана одна переменная!';
    }
    elseif (empty($arr) and empty($str1)){
       // echo 'Не заданы обе переменные!';
    }
    else {
        $b = $arr[0];
        echo 'Результат = ';
        switch ($str1) {
            case ("+"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b += $arr[$i];
                }
                echo $b;
                break;
            case ("-"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b -= $arr[$i];
                }
                echo $b;
                break;
            case ("*"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b = $b * $arr[$i];
                }
                echo $b;
                break;
            case ("/"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b = $b / $arr[$i];
                }
                echo $b;
                break;
            case ("%"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b = $b % $arr[$i];
                }
                echo $b;
                break;
            case ("**"):
                for ($i = 1; $i < count($arr); $i++) {
                    $b = $b ** $arr[$i];
                }
                echo $b;
                break;
            default:
                echo "Нет такой арифметической операции!";
                break;
        }
    }
}

?>