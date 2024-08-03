<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: wheat;
    }

    pre {
        color: red;
    }   
    </style>
    <title>Глава 4.</title>
</head>
<body>
    <h1>Глава 4</h1>
    <h2>Массивы</h2>
    <p>
    Массивы в PHP представляют собой инструмент для хранения, обработки и управления
    данными. Они позволяют организовывать информацию в упорядоченные коллекции и 
    обращаться к ней по ключу или индексу. В PHP есть несколько типов массивов,
    включая индексированные и ассоциативные массивы, а также многомерные и 
    вложенные массивы, которые обеспечивают гибкость при работе с данными 
    различной структуры.
    </p>
    <pre>
&lt;?php
// Пустой массив:
    $A=array();
    print("Массив \$A:\n");

// Содержание массива:
    print_r($A);

// В массив добавляются элементы:
    $A[0] = "Красный";
    $A[1] = "Желтый";
    $A[2] = "Зеленый";
    print("Массив \$A:\n");

// Содержание массива:
    print_r($A); 
    
// Массив из трех целочисленных:
    $B=array(100, 200, 300);
    print("Массив \$B:\n");

// Содержание массива: 
    print_r($B);
    print("\$B =[");

// Поэлементное отображение массива:
    for($k=0;$k < count($B);$k++) {
    print($B[$k]." ");
}
    print("]\n");

// Массив с элементами разных типов:
    $C=["Первый", 2, 3.3];
    print("Массин \$C:\n");

// Содержание массива:
    print_r("$C");
?&gt;
</pre>
<p>
    Результат выполнения будет таким:
</p>
<ol>
    <li>Будет создан пустой массив $A.</li>
    <li>Поскольку массив $A пуст, вызов print_r($A) ничего не выведет.</li>
    <li>В массив $A будут добавлены элементы "Красный", "Жёлтый" и "Зелёный".</li>
    <li>Будет выведено содержимое массива $A: Array ( [0] => Красный [1] => Жёлтый [2] => Зелёный ).</li>
    <li>Создается массив $B из трёх целочисленных элементов: 100, 200 и 300.</li>
    <li>Выведится содержимое массива $B: Array ( [0] => 100 [1] => 200 [2] => 300 ).</li>
    <li>Будет выведена строка $B =, за которой последуют три пробела.</li>
    <li>Использован цикл for для поэлементного отображения массива $B.</li>
    <li>Будет создан массив $C с элементами разных типов: "Первый", 2 и 3.3.</li>
    <li>Выводится содержимое массива $C: Array ( [0] => Первый [1] => 2 [2] => 3.3 ).</li>
</ol>
<p>
Сначала создаётся пустой массив $A, затем в него добавляются элементы, после чего 
выводится его содержимое. Далее создаётся массив $B из трёх целочисленных элементов
и также выводится его содержимое. Затем используется цикл for для поэлементного 
отображения массива $B. Наконец, создаётся массив $C с элементами разных типов и 
также выводится его содержимое.
</p>
<hr>
<br>
<p>
    Кроме ф-и count() для определения длины размера массива можно ипользовать ф-ю 
    sizeof().
</p>
<p>
    Давай вспомним что мы пользуемся некоторой терминогией.В Массивах содержаться
    элементы. У элементов есть значение и id ключи.ID ключ для многомерных
    массивов. Ниже пример массива с элементами для которых для которых явно 
    указаны ключи.
</p>
<pre>
&lt;?php
//Пример массива с эл-ми и ключами разных типов:
$mixedArray = array(
 'stringKey' => 'Это строка',
 10 => true, // Целочисленный ключ со значением логического типа
 'anotherString' => array(1, 2, 3), // Ключ - строка, значение - массив
 'numericKey' => 42.5 // Ключ - число, значение - число с плавающей точкой
);

var_dump($mixedArray);

// Результ выведется таким
array(4) { 
    ["stringKey"]=> string(19) 
    "Это строка" [10]=> bool(true) 
    ["anotherString"]=> array(3) 
    { 
        [0]=> int(1) 
        [1]=> int(2) 
        [2]=> int(3) 
    } 
    ["numericKey"]=> float(42.5) }

?&gt;
</pre>
<h3>Дополнение</h3>
<p>
    Как добавить новый эл-т в массив? Делается это при помощи команды вида
    массив()=значение. Тоесть обращаемся к эл-ту указав круглые скобки не указывая
    ключ. В таком случае ключ или назовем индекс высчитывается автоматически.индекс
    будет плюс один от самого большого предыдущего.
</p>
<p>
    Как удалить элемент с массива? Применяем команду unset() передав ей аргументом
    удаляемый элемент.
</p>
<hr>
<br>
<h2>Цикл по массиву</h2>
<h3>Цикл по массиву при помощи <strong>оператора цикла foreach</strong>с использованием индекса</h3>
<p>
    Синтаксис выглядит так: <pre>
        foreach(массив as ключ=>значение) {
            # Какие то команды
        }
    </pre>
</p>
<p>
    Вот небольшой пример:
</p>
<pre>
&lt;?php
$myArray = array("Яблоко", "Апельсин", "Груша");

foreach ($myArray as $value) {
echo "$value<br>";
}
?&gt;
</pre>
<p>
В массиве содержится три элемента: “Яблоко”, “Апельсин”, “Груша”. 
Цикл foreach перебирает каждый элемент массива, присваивая его значение
переменной $value. Затем выполняется код внутри блока цикла, в данном 
случае - вывод значения элемента на экран.   
</p>
<p>
    Также существует другой вариант синтаксиса. Вместо открывающихся фигурных
    скобках, ставится двоеточие
</p>
<p>
    Синтаксис выглядит так: 
    <pre>
        foreach(массив as ключ=>значение) :
            # Какие то команды
        
        endforeach;    
    </pre>
</p>
<p>
    Возьмем предыдущий пример и просто уберем фигурные скобки а вконце допишем
    инструкцию endforeach и поставим точку с запятой.
</p>
<pre>
&lt;?php
$myArray = array("Яблоко", "Апельсин", "Груша");

foreach ($myArray as $value) :
echo "$value<br>";

endforeach;
?&gt;
</pre>
<hr>
<br>
<h2>
    Многомерные массивы.
</h2>
<p>
    Многомерные массивы. Это означает то, что внутри массива могут быть еще массивы. 
    Также элементами этого массива тоже могуть быть массивы.
</p>
<p>
    Многомерный массив создается так. Нужно при создании массива, один или несколько
    эл-в описать как массив. Рассмотрим  пример:
</p>
<pre>
&lt;?php
// Многомерный массив:
$A = [
[1, 2, 3, 4, 5],
["A", "B", "C", "D", "E"],
[6, 7, 8, 9]
];
foreach ($A as $row) {
foreach ($row as $column) {
echo "$column ";
}
echo "<br>";
}
?&gt;
</pre>
<pre>
    //Результат выведется такой
    1 2 3 4 5
    A B C D E
    6 7 8 9
</pre>
<hr>
<br>
<h2>
    Присваивание массивов.
</h2>
<p>
    Присваивание массивов в PHP дает возможность копировать значения одного в другой. 
</p>
<p>
    Пример с присваиванием:
</p>
<pre>
&lt;?php
// Исходный массив:
$A=[1;[2;[3;4]]];
print("Массив \$A:\n");

// Проверим содержимое макссива:
print_r($A);

// Присваивание массивов:
$B=($A);
print("Массив \$B:\n");

// Проверим содержимое массива:
print_r($B);

// Теперь изменим исходный массив:
$A[0]="A";
$A[1][0]="B";
$A[1][1][0]="C";
print("Массив \$A:\n");

// Проверим содержимое массива:
print_r($A);

print("Массив \$B:\n");

// Проверим содержимое массива:
print_r($B);

?&gt;
</pre>
<pre>
    //Результ выведется таким
    Массив Array:nArray 
    (
        [0] => 1 [1] => Array 
        ( 
            [0] => 2 [1] => Array 
            ( 
                [0] => 3 [1] => 4 
            ) 
                ) 
                    ) 
                    Массив Array:nArray 
                    ( 
                        [0] => 1 [1] => Array 
                        ( 
                            [0] => 2 [1] => Array 
                            ( 
                                [0] => 3 [1] => 4 
                                ) 
                                    ) 
                                ) 
                                Массив Array:nArray 
                                ( 
                                    [0] => A [1] => Array 
                                    ( 
                                        [0] => B [1] => Array 
                                        ( 
                                            [0] => C [1] => 4 
                                            ) 
                                                ) 
                                                    ) 
                                                    Массив Array:nArray 
                                                    ( 
                                                    [0] => 1 [1] => Array 
                                                    ( 
                                                    [0] => 2 [1] => Array 
                                                    ( 
                                                        [0] => 3 [1] => 4 
                                                        ) 
                                                            ) 
                                                                );
</pre>
<p>
    Самое важное по итогу тут то что, изменение массива $A
    (после выполнения команды $B=$A) ни как не вляет на массив $B. 
    Или если другими словами командой $B=$A, мы создаем копию массива $A.
</p>
<hr>
<br>
<h2>Объединение массивов</h2>
<p>
    Для обединения массивов используется оператор + , при этом правило такое,
    что при складывании двух массивов в результате будет один состоящий из тех
    что мы сложили.
</p>
<p>
    Пример объединения(сложения) массивов:
</p>
<pre>
&lt;?php
// Исходные данные:
$A=["Первый"=>1,2,"Последний"=>3];
$B=[100,200,"Последний"=>300];

// Сумма массивов:
$C=$A+$B;

// Результат:
print_r($C);
?&gt;
</pre>
<pre>
// В результат выведется  так.
// Array ( [Первый] => 1 [0] => 2 [Последний] => 3 [1] => 200 )
</pre>
<p>
    В этом примере, в результате у нас получилось сначала сложение массивов
    $A и $B значения с одинаковыми ключами как мы помним объединяются. Ну и 
    значения без ключа добавляются как обычные элементы массива.
</p>
<hr>
<br>
<h2>Сравнение массивов</h2>
<p>
Сравнение массивов на равенство не равенство. Два массива считаются равными
если у них одинаковый набор элементов это как ключи так и их значения.
Также существует автоматическое присваивание типов. Которое  также может 
применятся для сравнения массивов.
функций массива, таких как `array_diff()`, `array_intersect()` и оператор `===`.
</p>
<p>
Если для сравнения массивов применяются оераторы == и !=, то сравнение будет
с учетом автоматического привидения типов. 
</p>
<p>
Если хотим сравнить массивы без учета привидения автоматического привидения типов.
То нужно применить операторы === и !==. Причем здесь идет речь иключительно о 
значениях эл-в. Ключи эл-в сравниваются на совпадения в любом случае, с учетом
автоматического привидения типов.
</p>
<p>
    Пример:
</p>
<pre>
&lt;?php
// Массивы для сравнения:
$A=["0" => 123, 1 => true, 2 => ""];
$B=["123", 10, 0];
$C=[0 => 123,"1" => true,"2" => ""];
$D=[0 => 123,1 => true,2 => ""];

// Сравнение массивов:
if($A == $B) {
    echo '$A == $B', "\n";
}

if($A == $B) {
    echo '$A !== $B', "\n";
}

if($A === $C) {
    echo '$A === $C', "\n";
}

if($A != $D) {
    echo '$A != $D', "\n";
}

?&gt;
</pre>
<pre>
    <p>Результат будет таким</p>
    $A==$B
    $A!==$B
    $A===$C
    $A!=$D
</pre>

<p>
    Попробуем разобраться. Дан массив $A = ["0" => 123, 1 => true, 2 => ""],
    который сравнивается с массивами $B=["123", 10, 0], $C=[0 => 123,"1" => true,"2" => ""],
    и D=[0 => 123, 1 => true, 3 => ""]; В частности истинным условием является $A==$B. Причина
    в том что. У массива $A элементы массива имеют ключи "0" 1 и 2 соответственно значения
    123, true и "". У элементов массива $B ключи 0, 1 и 2(вычисляются автоматически), а значения
    у соответствующих эл-в "123", 10 и 0. Учитывая что "0" автоматически преобразуется в 0,
    ключи совпадают. Значени "123" преобразуется в 123, отличное от нкля число 10 эквиваленто 
    значению true, а пустая текстовая строка "" преобразуется к значению 0.
</p>
<h3>Примечяние</h3>
<p>
    В PHP версии 8 пустой текст "" не равен 0. Поэтому условие $A == $B не выполняется.
</p>
<hr>
<br>
<h2>Функции для работы с массивами</h2>
<p>
    Функций для работы с массивами очень много. Они могут выполнять разные операции.
    К примеру это как, подсчитывать элементы, объединять массивы, искать какие то значения,
    сортировать данные, извлекать ключи, ну и тд.  Общим для всех ф-й является 
    то - что аргументом Функции может передаваться пустая переменная (тоесть без значения) а 
    значением присваиваться массив. 
    Давай рассмотрим на примерах некоторые из них. 
</p>
<pre>
&lt;?php
//array_keys — возвращает числовые и строковые ключи, содержащиеся в массиве array.

$result = array_keys ($arr);
$result1 = array_keys ($bar[0]);

        echo '<pre>';
        print_r ($result);
        echo ' </pre>';

        echo '<pre>';
        print_r ($result1);
        echo '</pre>';
//Cоздается два массива, каждый из которых будет содержать ключи другого массива.
Первый массив $result будет содержать ключи массива $arr,
а второй массив $result1 — ключи первого элемента массива $bar.

//выведет:
Array (
[0] => 0
[1] => 1
[2] => 2
)
Array (
    [0] => title
    [1] => price
    [2] => description
)
//Это означает, что массив $arr содержит три элемента, также массив $bar — три элемента,
но здесь первый элемент сам является массивом с ключами title, price и description.

?&gt;
</pre>
<hr>
<br>
<p>
array_rand — выбирает один или несколько случайных ключей из массива - по умолчанию одно значение:
</p>
<pre>
&lt;?php
$result = array_rand ($arr);

echo '<pre>';
print_r ($result);
echo '</pre>';
?>
- будет взят случайный ключ.
Если записать array_rand($arr, 2) - будет взято два случайных ключа.
?&gt;
</pre>
<hr>
<br>
<p>Ну и еще один  рассмотрим пример</p>
<p>
array_reverse — возвращает массив с элементами в обратном порядке:
</p>

<pre>
&lt;?php

$result = array_reverse ($arr);

echo '<pre>';
print_r ($result);
echo '</pre>';
?>
- выведет массив в обратном порядке - массив был переиндексирован.
Чтобы перевернуть массив с сохранением ключей,
добавляется опция: array_reverse($arr, TRUE).

?&gt;
</pre>
<hr>
<br>
<h2>Резюмируем пройденую тему</h2>
<ol>
    <li>Массив представляет собой, набор значений обьединеных общим именем, значения 
        могут иметь разные типы.
    </li>
    <li>
        Доступ к эл-ту массива выполняется по ключу или индексу. Ключем могут быть
        как как число так и строка.
    </li>
    <li>
        Есть несколько вариантов создания массива. Можно присвоить значение элементам массива,
        Использовать ф-ю (синтаксисную конструкцию array()), Перечислить значения эл-в
        массива в квадратных скобках. Если ключи/индексы не указаны явно, 
        то они вычисляются автоматически.
    </li>
    <li>
        Для перебора содержимого массива используется ф-я foreach, она позволяет получить
        доступ к ключам и значениям эл-в массива.
    </li>
    <li>
        Эл-ми массива также могут быть массивы. В этом случае доступ к внутренним эл-м массива
        получают при помощи нескольких ключей.
    </li>
    <li>
        С массивами можно выполнять разные операции. Такие как присваиваиние, сложение двух 
        массивов в один, поиск значений массива по ключу и тд.
    </li>
</ol>
<hr>
<br>
</body>
</html>