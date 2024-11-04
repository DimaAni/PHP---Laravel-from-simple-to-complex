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
    <title>Глава. 12</title>
</head>
<body>
<h1>Использование PHP</h1>
<h2>Обработка параметров запроса.</h2>
<p>
Чтобы обработать параметры запроса в PHP, можно использовать глобальный массив $_GET. В нём 
хранятся все значения, которые мы передаём через GET. Вот пример скрипта user.php, который
получает и выводит значения name и age:
</p>

    <pre>
&lt;?php
$name = "не определено";
$age = "не определен";

if (isset($_GET["name"])) {
    $name = $_GET["name"];
}

if (isset($_GET["age"])) {
    $age = $_GET["age"];
}

echo "Имя: $name <br> Возраст: $age";
?&gt;
</pre>
<p>
    В этом примере -
</p>
<ol>
    <li>Мы определяем переменные $name и $age с начальными значениями.</li>
    <li>Используем isset для проверки наличия параметров name и age в массиве $_GET.</li>
    <li>Если параметр существует, присваиваем его значение соответствующей переменной.</li>
    <li>Выводим значения переменных $name и $age.</li>
</ol>
<p>Вот пример как это будет использоваться</p>
<pre>
http://localhost/user.php?name=Ivan&age=22
</pre>
<p>
В этом случае, скрипт выведет:  // Имя : Ivan  Возраст: 22
</p>
<p>
Именно так, мы можем легко обрабатывать параметры запроса GET в PHP, используя массив $_GET.
</p>
<hr>
<br>

</body>
</html>