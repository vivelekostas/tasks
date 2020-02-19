<?php

// 5) Ф. которая разворачивает словарь наоборот =========================================
$slovarik_ru_fr = array('груша'=>'poire', 'яблоко'=>'la pomme',
    'персик'=>'pêche', 'женщина'=>'la femme');
function revers_dict($x){
    $rev_value = array();
    $rev_key = array();
    foreach ($x as $key => $value){
        array_unshift($rev_value, $value);  //добавляет в начало пустого м-ива каждое з-ие из входящего м-ва
        array_unshift($rev_key, $key);      //добавляет в начало пустого м-ива каждый ключ (как значение) из входящего м-ва
        $rev = array_combine($rev_key, $rev_value);  //создаёт новый асоц.м-ив из двух других м-вов
    }
    return $rev;
}
print_r(revers_dict($slovarik_ru_fr));


// 4) Ф которая принимает в себя два списка, в которых есть совпадающие и несовпадающие значения,
// и сравнивает их возвращая обе категории элементов.====================================
echo "<h4>Самый быстрый и хороший вариант этой сравнивающей функции:</h4>";
$listik_1 = array(1,2,3,5,4,7,6);
$listik_2 = [1,2,3,4,9,8];
function compare($a, $x){
    foreach ($a as $key1 => $value1){
        if (in_array($value1, $x, TRUE)){  //если есть текущее з-ие в массиве $x,
            $sovpadeniya[] = $value1;      //то добавить его в массив совпадений
            unset($a[$key1]);              //удалить его из проверяемого массива
            $key2 = array_search($value1, $x, $strict = TRUE);  //находит ключь идентичного з-ия во втором массиве
            unset($x[$key2]);              //и удаляет з-ие из него
        }
    }
    $NEsovpavshie = array_merge($a, $x);   //обьединяет остатки от этих массивов, не нашедших себе пару
    $res = array ($sovpadeniya, $NEsovpavshie);
    return $res;
}
print_r(compare($listik_1, $listik_2));

// 3) Ф. которая принимает список со смешанным типом данных и возвращает упорядоченный
// в последовательности  int, float, str: ========================================
$nums = array(1, "kus", 2, 2.5, 10, "Murcha", 4, 6, 3.14, "monkey");

function true_order($x)
{
    foreach ($x as $value) {
        if (is_int($value)) {    //проверяет - является ли текущее значение
            $int[] = $value;      //целым числом и добавляет в массив если true
        } elseif (is_float($value)) {
            $float[] = $value;
        } elseif (is_string($value)) {
            $string[] = $value;
        }
    }
    $order[] = $int;
    $order[] = $float;
    $order[] = $string;
    return $order;
}

print_r(true_order($nums));

// 2) среднее арифметическое массива: ========================================
$nums = array(1, 2, 4, 6, 8, 5, 3, 9);
function srednee_arifmet($x){
    $sum_all = 0;
    $len_all = 0;
    foreach ($x as $value) {
        $sum_all = $sum_all + $value;  //складывает текущее значение с предыдущим
        $len_all = $len_all + 1;       //прибавляет "1" при переборе каждого значения массива
    }
    return "<b>Среднее ариф-ое массива: </b>". $sum_all / $len_all;
}
echo srednee_arifmet($nums);

// 1) Числа Фибоначчи рекурсией. ========================================
function myRekForFib(int $num, array $arr)
{
    $lastItem = $arr[((count($arr)) - 1)];
    $penultimateItem = $arr[((count($arr)) - 2)];
    $i = $lastItem + $penultimateItem;
    $arr[] = $i;
    $updateArr = $arr;
    if (count($arr) > $num) {
        return $arr;
    } else {
        return myRekForFib($num, $updateArr);
    }
}

$fibArr = array(0, 1);
var_dump(myRekForFib(9, $fibArr));