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
<hr>
<br>
<h2>Генераторы</h2>
<p>
    Определение: Генераторы — это специальные функции в PHP, которые позволяют создавать итераторы, 
используя ключевое слово yield. Генераторы позволяют приостанавливать выполнение функции 
и возвращать значения по мере необходимости.
</p>
<p>Пример использования генератора:</p>
<pre>
&lt;?php
function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}

foreach (generateNumbers() as $number) {
    echo "Число: {$number} " . PHP_EOL;
}
?&gt;
</pre>
<hr>
<br>
<p>
Какая разница между итераторами и генераторами?
</p>
<ol>
    <li>
    Реализация:
    <pre>
    Итераторы: Реализуются через класс, который реализует интерфейс Iterator.
    Генераторы: Создаются с помощью специальной функции, использующей ключевое слово yield.
    </pre>
    </li>
    <li>
    Использование:  
    <pre>
    Итераторы: Требуют использования методов интерфейса Iterator для управления итерацией.
    Генераторы: Используются в foreach циклах, как обычные итераторы.    
    </pre>  
    </li>
    <li>
    Гибкость:
    <pre>
    Итераторы: Позволяют более гибко контролировать процесс итерации, так как реализуют полный 
    набор методов интерфейса Iterator.
    Генераторы: Легче в реализации, но предлагают меньше контроля над итерацией.    
    </pre>   
    </li>
</ol>
<p>
Заключение:
Выбор между итераторами и генераторами зависит от конкретных потребностей вашего приложения.
Генераторы проще в реализации и использовании, но предлагают меньше контроля над итерацией. 
Итераторы, с другой стороны, предлагают больше гибкости и контроля, 
но требуют более сложной реализации.
</p>

<pre>
&lt;?php

?&gt;
</pre>

</body>
</html>