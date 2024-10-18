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


</body>
</html>