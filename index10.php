<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: wheat;
        color: black;
    }

    pre {
        color: red;
    }

    .ul pre {
        font-size: 18px;
        color: black;
    }
    
    </style>
    <title>Глава. 10</title>
</head>
<body>
<h1>Обработка ошибок</h1>
<h2>Принципы обработки ошибок</h2>
<p>Прошу меня простить. В этой главе я решил ускориться и не впадать в подробности. Просто коротко и по сути.</p>
<p>
В PHP для обработки ошибок используется конструкция try-catch. Вот основные принципы:
</p>
<ol>
    <li>
Конструкция try-catch:        
<pre>
Блок try: Здесь помещается код, который потенциально может вызвать ошибку.
Блок catch: Здесь обрабатывается возникшая ошибка.
</pre>
    </li>
    <li>
Типы ошибок и исключений:        
<pre>
Error: Ошибки, возникающие при выполнении программы.
Exception: Исключения, которые могут быть обработаны.
Throwable: Интерфейс, от которого наследуются все типы ошибок и исключений.
</pre>
    </li>
    <li>
Пример обработки ошибки деления на ноль:        
    <pre>
&lt;?php
try {
$a = 5;
$b = 0;
$result = $a / $b;
echo $result;
} catch(DivisionByZeroError $ex) {
    echo "Произошло исключение:<br>";
    echo $ex. "<br>";
}
echo "Конец работы программы";
?&gt;
</pre>
    </li>
    <li>
Обработка нескольких типов ошибок:
<pre>
&lt;?php
try {
    $ result = 5 / 0;
    echo $result;
} catch(ParseError $p) {
    echo "Произошла ошибка парсинга";
} catch(DivisionByZeroError $d) {
    echo "На ноль делить нельзя";
}
?&gt;
</pre>       
    </li>
    <li>
Использование интерфейса Throwable:
<pre>
&lt;?php
try {
    $ result = 5 / 0;
    echo $result;
} catch(Throwable $ex) {
    echo "Ошибка при выполнении программы";
}
?&gt;
</pre>       
    </li>
    <li>
Блок finally:
<pre>
&lt;?php
try {
    $ result = 5 / 0;
    echo $result. "<br>";
} catch(Throwable $ex) {
    echo "Ошибка при выполнении программы<br>";
} finally {
    echo "Блок finally<br>";
}
echo "Конец работы программы";
?&gt;
</pre>
    </li>
</ol>


</body>
</html>