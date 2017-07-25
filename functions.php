<?php
function task1($arr, $bool)
{
    if ($bool == false) {
        $str = '';
        for ($i = 0; $i <= count($arr); $i++) {
            $str = $str . '<p>' . $arr[$i] . '</p>';
        }
    }
    if ($bool == true) {
        $str = implode(",", $arr); //обьедили массив в строку через запятую
    }
    return $str;
}

function task2($arr, $str)
{
    echo "<br>";
    echo 'Массив: ';
    print_r($arr);
    echo "<br>";
    echo 'Операция ' . $str;
    echo '<br>';
    if (!isset($arr) or !isset($str)) {
        echo 'Не задана одна переменная!';
    } else {
        $b = $arr[0];
        echo 'Результат = ';
        switch ($str) {
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

function task3($str, ...$arg)
{
    $count = func_num_args();
    echo "<br>";
    echo 'Аргументы: ';
    print_r($arg);
    echo "<br>";
    echo 'Операция ' . $str;
    echo '<br>';
    if (!isset($arg) or !isset($str)) {
        echo 'Не задана одна переменная!';
    } else {
        $b = $arg[0];
        echo 'Результат = ';
        switch ($str) {
            case ("+"):
                for ($i = 1; $i < $count - 1; $i++) {
                    $b += $arg[$i];
                }
                echo $b;
                break;
            case ("-"):
                for ($i = 1; $i < $count - 1; $i++) {
                    $b -= $arg[$i];
                }
                echo $b;
                break;
            case ("*"):
                for ($i = 1; $i < $count - 1; $i++) {
                    $b = $b * $arg[$i];
                }
                echo $b;
                break;
            case ("/"):
                for ($i = 1; $i < $count - 1; $i++) {
                    $b = $b / $arg[$i];
                }
                echo $b;
                break;
            case ("%"):
                for ($i = 1; $i < $count - 1; $i++) {
                    $b = $b % $arg[$i];
                }
                echo $b;
                break;
            case ("**"):
                for ($i = 1; $i < $count - 1; $i++) {
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
    echo 'Переменная a = ' . $a;
    echo '<br>';
    echo 'Переменная b = ' . $b;
    echo '<br>';

    if (gettype($a) == "integer" and gettype($b) == "integer") {
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
    } else {
        echo "Неверный формат переменных";
    }

}

function task5_1($palindrom)
{
    $bool = true;
    echo "Введенная фраза: " . $palindrom;
    echo '<br>';
    $text = str_replace(" ", "", $palindrom); //убрали пробелы
    $count = mb_strlen($text);//считали длинну
    $palindrom_low = mb_strtolower(iconv("UTF-8", "UTF-8", $text)); //счделали все буквы маленькими
    for ($i = 0; $i < $count; $i++) {
        $letter1 = mb_substr($palindrom_low, $i, 1);
        $letter2 = mb_substr($palindrom_low, $count - $i - 1, 1);
        if ($letter1 != $letter2) {
            $bool = false;
            break;
        }
    }
    return $bool;
}

function task5_2($bool)
{
    if ($bool) {
        echo "Результат: фраза палиндром.";
    } else {
        echo "Результат: фраза не палиндром.";
    }
    echo '<br>';
}

function task6()
{
    echo 'Текущая дата и время: ' . date("d.m.Y H:i");
    echo '<br>';
    echo 'Unix time: ' . date("d.m.Y H:i:s", mktime(0, 0, 0, 02, 24, 2016));
}

function task7($str1, $str2)
{
    echo 'Строка: ' . $str1;
    echo '<br>';
    $search = "К";
    $replace = "";
    $output = 'Результат удаления К:' . str_replace($search, $replace, $str1);
    echo $output;
    echo '<br>';
    echo 'Строка: ' . $str2;
    echo '<br>';
    $search = "Две";
    $replace = "Три";
    $output = 'Результат замены:' . str_replace($search, $replace, $str2);
    echo $output;
}

function task8($packeges)
{
    $pattern = array('|[A-Z]|', '|[a-z]|', '|:|', '|\s0|', '|\.|', '|\s|');
    $replacement = '';
    $result = preg_replace($pattern, $replacement, $packeges);
    echo '<br>';
    $pattern = '|:\)|';
    $res = preg_match($pattern, $packeges);
    if ($res == 1) {
        smile();
    } else {
        if ($result > 1000) {
            echo 'Сеть есть';
        }
        echo '<br>';
    }
}

function smile()
{
    echo '<pre>';
    echo '                                                     ..::\'\'\'\'::..
                                           .:::.   .;\'\'        ``;.
   ....                                    :::::  ::    ::  ::    ::
 ,;\' .;:                ()  ..:            `:::\' ::     ::  ::     ::
 ::.      ..:,:;.,:;.    .   ::   .::::.    `:\'  :: .:\' ::  :: `:. ::
  \'\'\'::,   ::  ::  ::  `::   ::  ;:   .::    :   ::  :          :  ::
,:\';  ::;  ::  ::  ::   ::   ::  ::,::\'\'.    .    :: `:.      .:\' ::
`:,,,,;;\' ,;; ,;;, ;;, ,;;, ,;;, `:,,,,:\'   :;:    `;..``::::\'\'..;\'
                                                     ``::,,,,::\'\'
';
    echo '</pre>';
}

function task9()
{
    $text = file_get_contents('./test.txt');
    return $text;
}

function task10()
{
    $text = "Hello again!";
    $fp = fopen("anothertest.txt", "w");
    fwrite($fp, $text);
    fclose($fp);
}

?>