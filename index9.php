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
    <title>Глава. 9</title>
</head>
<body>
    <h1>Расширенные механизмы ООП.</h1>
    <h2>Абстрактные классы.</h2>
<p>
    При создании класса некоторые можно и не описывать а только объявить. Ну или сказать иначе 
    то что в классе есть метод но не указывать точно какой именно. Это и есть методы абстракции. 
</p>
<p>
    Абстрактные методы объявляются при помощи модификатора abstract. Он ставвится перед именем класса.
    Абстрактные классы, как и обычные, могут иметь переменные и константы, методы и конструкторы.
</p>
<p>
    Если в классе есть хотябы один абстратный метод, то такой класс тоже будет считаться абстрактным 
    и поэтому следует в его описании указывать ключевое слово абстракт.Пример:
</p>

<pre>
&lt;?php
abstract class User {
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Абстрактный метод без тела:
    abstract public function increaseRevenue($value);
}
?&gt;
</pre>
<p>
Этот пример демонстрирует, как создать абстрактный класс User, который содержит приватное
свойство $name и методы getName() и setName(), а также абстрактный метод increaseRevenue(),
который должен быть реализован в наследниках.
</p>
<hr>
<br>
<h2>Интерфейсы</h2>
<p>
    Интерфейсы очень напоминают абстрактный класс и разница между ними в том что абстрактный класс 
    может иметь неабстракные методы а интерфесы же  - нет.Так же у интерфейса нет полей но могут быть 
    константы (const). Преимущество интерфейсов в том что один класс может реализовать несколько интерфейсов.  
</p>
<p>
    Интерфейсы объявляются так же, как и обычные классы, но с использованием ключевого слова 
    interface вместо class.
</p>
<p>
    Тела методов интерфейсов должны быть пустыми. Все методы, определённые в интерфейсах, 
    должны быть общедоступными.
</p>
<p>
    Класс, реализующий интерфейс, должен реализовать все методы, описанные в интерфейсе, 
    иначе произойдёт фатальная ошибка.Класс может реализовывать несколько интерфейсов, 
    разделяя каждый интерфейс запятой.
</p>
<p>
    С PHP 8.0, в языке поддерживаются именованные аргументы, и вызывающий код может 
    полагаться на имя параметра в интерфейсе.Примеры:
</p>
<pre>
&lt;?php
//Взаимозаменяемость объектов:
// Интерфейс Template
interface Template {
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Реализация интерфейса
class WorkingTemplate implements Template {
    private $vars = [];

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

    public function getHtml($template) {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{'. $name. '}', $value, $template);
        }

        return $template;
    }
}
?&gt;
</pre>

<pre>
&lt;?php
//Использование интерфейсов для параметров:
// Интерфейс Cacheable
interface Cacheable {
    public function getCachedData();
}

// Функция, принимающая параметр, соответствующий интерфейсу Cacheable
function processData(Cacheable $cacheable) {
    // Использование метода getCachedData()
    echo $cacheable->getCachedData();
}
?&gt;
</pre>
<hr>
<br>
<h2>Наследование интерфейсов</h2>
<p>
В PHP можно сделать так, чтобы один интерфейс наследовал методы другого интерфейса. 
Для этого используется ключевое слово extends.
</p>
<pre>
&lt;?php
//интерфейс: 
interface Alfa {
   public function show();
}

// Интерфейс Alfa наследует интерфейс Bravo:
interface Bravo extends Alfa {
    public function set($val); 
}

// Класс реализует итерфtс Bravo:

    class MyClass implements Bravo {
        public $num;
        
    public function set($val) {
            $this->num= $val;
        }
    public  function show() {
            echo "\$num = " . $this->num . "\n";  //$num = 123
        }
}
// Создание объекта: 
$obj = new MyClass();
// Проверка результата: 
$obj->set(123);
$obj->show();
?&gt;
</pre>


</body>
</html>