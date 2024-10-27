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
    <title>Глава. 11</title>
</head>
<body>
<h1>Итераторы и генераторы.</h1>
<h2>Итераторы</h2>
<p>
Определение: Итераторы — это объекты, которые реализуют интерфейс Iterator в PHP. 
Этот интерфейс определяет методы, которые позволяют контролировать процесс итерации.    
</p>
<p>
    Методы интерфейса Iterator:
</p>
<ol>
    <li>
        rewing():Перематывает итератор на начало.
    </li>
    <li>
        current(): Возвращает текущий элемент.
    </li>
    <li>
        key(): Возвращает ключ текущего элемента.
    </li>
    <li>
        next(): Переходит к следующему элементу.
    </li>
    <li>
        valid(): Проверяет, есть ли следующий элемент.
    </li>
</ol>
<p>Пример использования итератора:</p>
    <pre>
&lt;?php
class MyIterator implements Iterator {
    private $items = [];
    private $position = 0;

    public function __construct($items) {
        $this->items = $items;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->items[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        $this->position++;
    }

    public function valid() {
        return isset($this->items[$this->position]);
    }
}

$items = [1, 2, 3, 4, 5];
$iterator = new MyIterator($items);

foreach ($iterator as $key => $value) {
    echo "Элемент: {$value} " . PHP_EOL;
}
?&gt;
</pre>


<pre>
&lt;?php

?&gt;
</pre>


</body>
</html>