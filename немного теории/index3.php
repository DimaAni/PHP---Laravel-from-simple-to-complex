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
</body>
</html>