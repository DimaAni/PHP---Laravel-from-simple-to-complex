<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Глава 3.</title>
</head>
<body>
    <h1>Управляющие инструкции.</h1>
    <p>
    Управляющие инструкции в — это конструкции, позволяющие управлять
    потоком выполнения программы. Они включают в себя условные операторы
    (if, else, elseif, switch), циклы (for, while, do…while, foreach)
    и обработку исключений (try…catch). Они помогают создавать логику
    приложения, проверять условия, повторять действия и обрабатывать ошибки.
    </p>
    <p>
    Условный оператор if в используется для выполнения определенного 
    блока кода, если заданное условие истинно. Синтаксис выглядит так:    
    </p>
    <p>
    <pre>
&lt;?php
$age = 18;
if ($age >= 18) {
echo "Вы совершеннолетний.";
}
?&gt;
</pre>  
    </p>
    <p>
    Также может использован блок else. Когда условие ложно.
    Блок else не бязателен и может не применятся если это не нужно.
    </p>
    <p>
        Если блок команд в ветке if или в ветке else состоит из одной
        команды. То фигурные скобки можно не применять.
    </p>
    <p>
        Есть еще один вариант описания условного оператора if - Это
        когда не используются фигурные скобки.
    </p>
    <pre>
        if (условие):
            #команды
        else:
            #команды  
        endif;     
    </pre>
    <p>
        Рассмотрим еще пример c условным оператором, где выполняется
        проверка числа введенного пользователем, делится некоторое число или нет.
    </p>
    <pre>
&lt;?php
print("Введите челое число: ");

# Считываем число:

$number=(integer)trim(fgets(STDIN));

# Делитель:

$A=3;

# Проверка делимости числа:

if($number%$A==0) {

    print("Число $number делится на $A");
}

else {
    print("Число $number  НЕ делится на $A");
}
?&gt;
</pre>  
<p>
    Вместо команды $number=(integer)trim(fgets(STDIN)) можно применить
    явное присваивание значения п-ой $number: вот так $number = 5 
    или так $number = 15 
</p>
<p>
    Пример с условным оператором по сложней. Здесь мы будем использовать
    логические операторы и альтернативную форму синтаксиса оператора.
</p>
<pre>
&lt;?php
print("Введите простое число от 1 до 10: ");

// Считываем числа:

$number=(int)trim(fgets(STDIN));

// Проверка значения:

if($number==2 || $number==3 || $number==5 );

    print("Правильно!");

else:

    print("Вы ошиблись!");

endif;    
?&gt;
</pre>
<p>
    При запуске программы пользователь вводит простые числа от 1 до 10.
    Если вводит правильно в диапазоне указанных чисел от 1-10 то 
    появится сообщение "Правильно!". Если введет другие числа к примеру 
    такие как -1 или 11 то появится сообщение "Вы ошиблись!".
</p>
<hr>
<br>
<h3>Оператор цикла while.</h3>  
<p>
    Операторы цикла позволяют многократно выполнять опреленные команды 
    или же действия. В PHP их несколько и их действия однотипны(тоесть
    по сути они выполняют одни и теже задачи и эквиваленты друг другу
    по функциональным возможностям).
</p>
<p>
    Оператор цикла while имеет самый простой синтаксис. Начинается 
    со слова while затем в скобках уазывается условие и далее
    блок необходимых команд заключеных внутри фигурных скобках.
</p>
<pre>
    while(условие) {
        # Команда
    }
</pre>
<p>
    Работает цикл while просто. Сначало проверяется условие, если оно 
    истинно(верно) то выполняется условие указанное в теле(внутри) оператора цикла. 
    Далее снова проверяется условие.И так до тех пор пока условие не окажется 
    ложным. В сдедствии этого цикл while завершается.
</p>
<p>
    Если в теле оператора только одно условие то можно обойтись без скобок,
    но лучше так не делать. 
</p>
<p>
    Есть и такой вариант. Это когда после оператора while ставится двоеточие
    а заввершается оператор инструкцией endwhile (и точкой с запятой).
</p>
<pre>
    while(условие):

    # Команда

    endwhile;
</pre>
<p>Рассмотрим пример программы для вычисления суммы.</p>
<pre>
&lt;?php
//Верхняя граница суммы:
$n=100;

//Начальное знвчение суммы:
$s=0;

//Слагаемое для суммы:
$k=1;

//Вычисление суммы:
while($k<=$n) {
    $s+=$k; // Прибавляем слагаемое

    $k++ ; // Новое слагаемое
}
// Результат вычислений:
print("1+2+_+$n=$s");   // выведет 1+2+_+100=5050
?&gt;
</pre>  
<hr>
<br>
<h3>Оператор цикла do-while.</h3>
<p>
do…while — выполняет блок кода один раз, а затем повторяется до тех пор,
пока истинно специальное условие;
</p>
<p>синтаксис.</p>
<pre>
do {
код, который будет выполнен;
}
while (условие);
</pre>
<p>
    Расмотрим пример: Здесь значение с переменной i хотя бы один раз увеличится, 
    и будет продолжать возрастать до тех пор, пока будет меньше 10. </p>
<pre>
&lt;?php
$i = 0;
    $num = 0;
    
    do {
    $i++;
    }
    
    while( $i < 10 );
    echo ("Цикл остановился на i = $i" ); //выведет : i = 10
?&gt;
</pre>
<p>
Основное отличие между циклами while и do...while в PHP в том, что while проверяет
условие перед выполнением блока кода, а do...while выполняет блок кода один раз, 
и далее проверяет условие. Это означает, что do...while гарантирует выполнение
блока кода хотя бы один раз, независимо от условия, в то время как while может
никогда не выполнить блок кода, если условие изначально ложно.
</p>
<p>Коротко об инструкции break</p>
<p>
Инструкция break в PHP используется для немедленного прерывания выполнения 
текущего цикла. Она позволяет выйти из цикла, даже если условие цикла еще 
не выполнено. Это полезно, когда необходимо немедленно прекратить 
выполнение цикла при определенном условии.
</p>
<p>Пример с break</p>
<pre>
&lt;?php
$fruits = array("яблоко", "груша", "апельсин", "банан");

foreach ($fruits as $fruit) {
if ($fruit === "апельсин") {
break;
}
echo $fruit . "<br>";
}
?&gt;
</pre>
<p>
    Кроме инструкции break может еще пригодится интрукция continue. Она завершает
    выполнение текущей инструкции но при этом оператор цикла продолжает работу.
</p>
<p>
    Пример:
</p>
<pre>
&lt;?php
$numbers = array(1, 2, 3, 4, 5);

while (list($key, $value) = each($numbers)) {
if ($value % 2 == 0) {
continue;
}
echo "Нечетное число: " . $value . "<br>";
}
?&gt;
</pre>
<hr>
<br>
<h3>Оператор цикла for</h3>
<p>
Оператор цикла for в PHP используется для выполнения блока кода определенное количество раз.
Так выглядит синтаксис:
</p>
<pre>
for (инициализация; условие; инкремент) {
 // команда
}
</pre>
<p>
    Пример:
</p>
<pre>
&lt;?php
for ($i = 0; $i < 5; $i++) {

echo "Привет, мир!\n";
}
?&gt;
</pre>
<p>
    Еще пример: Здесь унас будут вычислятся числа фибоначи. 
</p>
<pre>
&lt;?php
function fibonacci($n) {
if ($n <= 1) {
return $n;
} else {
return fibonacci($n - 1) + fibonacci($n - 2);
}
}

echo fibonacci(10); // Выведет 55
?&gt;
</pre>
<p>
Функция принимает число n и возвращает соответствующее число Фибоначчи. 
Если n меньше или равно 1, функция возвращает n, что соответствует первому 
и второму числу Фибоначчи (0 и 1). В противном случае функция рекурсивно 
вызывает себя дважды, уменьшая n на 1 и 2 соответственно, 
и суммирует результаты вызовов.    
</p>
<hr>
<br>
<h3>Оператор выбора switch</h3>
<p>
    Оператор switch позволяет выполнить в зависимости от значения некоторого
    выражения тот или иной блок команд.
</p>
<p>Синтаксис: вызова оператора</p>
<pre>
    switch(выражение) {
        case значение:
            #Команды
            break;
        case значение: 
            #Команды
            break;  
        default:
            #Команды
    }
</pre>
<p>
    После ключевого слова switch указывается выражение значение которого
    проверяется. Далее следуют case блоки. В нашем примере их два. Но их
    может быть и намного больше. Последним может указываться default-блок
    и он явлется не обязательным. Каждый case-блок после ключевого слова
    case содержит ключевые команды. Дальше идет двоеточие и блок команд. 
    Которые обычно заканчиваются инструкцией break. Если есть блок 
    default то внем инструкция break не использется.
</p>
<p>
    Как выполняется оператор выбора? Сначало вычисляется выражение
    то что стоит в круглых скобках после слова switch. Значение этого
    выражения последоватьно до первого совпадения, сравнивается с 
    контрольными значениями указанными внутри case-блоках.
</p>
<p>
    У оператора выбора switch также есть альтернативный вариант синтаксис
</p>
<pre>
    switch(выражение): 
        case значение:
            #Команды
            break;
        case значение: 
            #Команды
            break;  
        default:
            #Команды
        endswitch;  
</pre>
<p>
    В данном случае фигурные скобки не используются, вместо началальной скобки
    поставили двоеточие. Вместо конечной скобки написали завершающую инструкцию
    endswitch после поставили точку с запятой.
</p>
<p>
    Пример: работа оператора switch(выбора)
</p>
<pre>
&lt;?php
// Имена неких девиц
$anna="Анна";
$alla="Алла";
$lidia="Лида";
print("Имя одной из \"Трех Девиц\": ")
//Считывание имени:
$name=trim(fgetc(STDIN));
//Проверка имени:
switch($name) {
    case $anna:
        print("Да, это Анна Викторовна");
        break;

    case $alla:
        print("Да, это Алла Борисовна");
        break;

    case $lidia:
        print("Да, это Лидия Александровна ");
        default;
    
        print("Странно, это четвертая девица ");
        default;        
}
?&gt;
</pre>
<p>
Этот фрагмент кода на PHP запрашивает у пользователя ввести имя одной из трёх девиц:
Анны Викторовны, Аллы Борисовны или Лидии Александровны. После ввода имени программа
проверяет, совпадает ли оно с одним из заданных имён, и выводит соответствующее 
сообщение. Если введено имя, которое не совпадает ни с одним из заданных, программа
выведет сообщение о том, что это четвёртая девица.
</p>
</body>
</html>