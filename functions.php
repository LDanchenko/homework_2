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
    echo 'Операция ' . $str1;
    echo '<br>';
    if (!isset($arr) or !isset($str1)) {
        echo 'Не задана одна переменная!';
    } else {
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
    echo 'Операция ' . $str2;
    echo '<br>';
    if (!isset($arg) or !isset($str2)) {
        echo 'Не задана одна переменная!';
    } else {
        $b = $arg[0];
        echo 'Результат = ';
        switch ($str2) {
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
    $tr = true;
    echo "Введенная фраза: " . $palindrom;
    echo '<br>';
    $text1 = str_replace(" ", "", $palindrom); //убрали пробелы
    $count = mb_strlen($text1);//считали длинну
    $palindrom1 = mb_strtolower(iconv("UTF-8", "UTF-8", $text1)); //счделали все буквы маленькими
    for ($i = 0; $i < $count; $i++) {
        $k = mb_substr($palindrom1, $i, 1);
        $k1 = mb_substr($palindrom1, $count - $i - 1, 1);
        if ($k != $k1) {
            $tr = false;
            break;
        }
    }
return $tr;
}
// можно ли во вторую функцию передать результат первой иначе?
function task5_2($tr){
    if ($tr) {
        echo "Результат: фраза палиндром.";
    } else {
        echo "Результат: фраза не палиндром.";
    }
    echo '<br>';
}

function task6 (){
    echo 'Текущая дата и время: ' .date("d.m.Y H:i");
    echo '<br>';
   echo 'Unix time: ' .date("d.m.Y H:i:s", mktime(0, 0, 0, 02, 24, 2016));
}

function task7($strok, $strok1){
    echo 'Строка: ' .$strok;
    echo '<br>';
    $search = "К";
    $replace   = "";
    $output  = 'Результат удаления К:' .str_replace($search, $replace, $strok);
    echo $output;
    echo '<br>';
    echo 'Строка: ' .$strok1;
    echo '<br>';
    $search = "Две";
    $replace   = "Три";
    $output  = 'Результат замены:' .str_replace($search, $replace, $strok1);
    echo $output;
}



function task8($packeges){

   $pattern = array ('|[A-Z]|','|[a-z]|', '|:|', '|\s0|', '|\.|', '|\s|');
    $replacement = '';
    $result = preg_replace($pattern, $replacement, $packeges);
    echo '<br>';
    $pattern = '|:\)|';
    $res = preg_match($pattern, $packeges);
     if ($res ==1){
           smile();
       }
       else {
           if ($result > 1000) {echo 'Сеть есть';}
           echo  '<br>';
       }

}
function smile(){
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

function task9(){
$text = file_get_contents('./test.txt');
return $text;
}

function task10(){
    $text = "Hello again!";
    $fp = fopen("anothertest.txt", "w");
    fwrite($fp, $text);
    fclose($fp);
}

?>