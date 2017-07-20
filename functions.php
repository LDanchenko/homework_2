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
    if (!isset($arr) or !isset($str1)) {
        echo 'Не задана одна переменная!';
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

function task3($str2, ...$arg)
{
    $count = func_num_args();
    echo "<br>";
    echo 'Аргументы: ';
    print_r($arg);
    echo "<br>";
    echo 'Операция ' .$str2;
    echo '<br>';
    if (!isset($arg) or !isset($str2)) {
        echo 'Не задана одна переменная!';
    }
    else {
        $b = $arg[0];
        echo 'Результат = ';
        switch ($str2) {
            case ("+"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b += $arg[$i];
                }
                echo $b;
                break;
            case ("-"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b -= $arg[$i];
                }
                echo $b;
                break;
            case ("*"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b = $b * $arg[$i];
                }
                echo $b;
                break;
            case ("/"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b = $b / $arg[$i];
                }
                echo $b;
                break;
            case ("%"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b = $b % $arg[$i];
                }
                echo $b;
                break;
            case ("**"):
                for ($i = 1; $i < $count-1; $i++) {
                    $b = $b ** $arg[$i];
                }
                echo $b;
                break;
            default:
                echo "Нет такой арифметической операции!";
                break;
        }
    }
}

function task4($a, $b)
{
echo '<br>';
echo 'Переменная a = '.$a;
echo '<br>';
echo 'Переменная b = '. $b;
echo '<br>';
    if (gettype($a)=="integer" and gettype($b)=="integer") {
        echo "<table>";
        for ($i = 1; $i <= $a; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $b; $j++) {
                echo '<td width = 80 align="center" >';

                echo($i * $j);

                echo '</td>';
            }
            echo "</tr>";
        }
        echo "</<table>";
    }
    else {
        echo "Неверный формат переменных";
    }

}

function task5($palindrom)
{
//сначала $text1 = str_replace(" ","",$text);
    //https://php.ru/forum/threads/zadacha-na-palindrom.45793/
$count = mb_strlen($palindrom);
$palindrom1 = mb_strtolower(iconv("UTF-8", "UTF-8", $palindrom));
echo $count;
echo '<br>';
echo '<br>';
    for ($i = 0; $i < $count; $i++)
    {
        echo $palindrom1[$i].PHP_EOL ;
        $tr = false;
       if ($palindrom1[$i]==$palindrom1[$count-$i-1])
        {
            $tr = true;
        }
    }

    if ($tr == true) { echo "true";}
    if ($tr == false) {echo "false";}
}

?>