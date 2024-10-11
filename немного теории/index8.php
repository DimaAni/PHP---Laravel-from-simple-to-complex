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
    <title>Глава. 8</title>
</head>
<body>
    <h1>Наследование.</h1>
    <h2>Принципы ООП и создание дочернего класса.</h2>
<p>
    Коротко об ООП. Расшифровывается эта абревиатура как Объектно Ориентированое
Программирование.Служит для упрощения работы с кодом. Помогает разбить большой 
объем кода на более мелкие части такие как классы и объекты. 
</p>
<p>
    Класс или еще для простоты можно назвать родитель, это некий шаблон с 
    определеным набором свойств и методов. Объекты или же дети наследуют соответсвенно все 
    свойства и методы  класса родителя.
</p>
<p>
    Если вы еще незнаете то на основе класса(родителя) можно создать ряд дочерних классов а на 
    основе этого дочернего класса еще и так далее.
</p>
<p>
    Тоесть понятие дочернего и родительского я вляется понятием относительным. Класс может быть 
    дочерним по одному классу и родителем по друому.
</p>
<p>
    Хотя опять же утвержается что многочисленное наследование в PHP, у дочернего класса 
    может быть только один родитель. Давай возьмем это на заметку
</p>
<p>
    Как же создается дочерний класс? Как ни странно довольно таки просто. 
    В описании класса сразу после его имени указывается ключевое слово extends и название 
    родительского класса. Ну а в описании дочернего класса только поля и методы котороые должны быть 
    помимо членов из родительского класса. Члены родительского класса доступны и в дочернем автоматически.  
</p>
<p>
    Ниже небольшой пример создания дочернего класса.
</p>
<pre>
&lt;?php
class ParentClass {
public function display() {
echo "Это родительский класс";
}
}

class ChildClass extends ParentClass {
public function display() {
echo "Это дочерний класс";
}
}

$obj = new ChildClass();
$obj->display();
?&gt;
</pre>
<p>
В примере выше мы создали родительский класс ParentClass с методом display() и дочерний
класс ChildClass, который расширяет методы родительского класса. Затем мы создали объект
ChildClass и вызвали метод display() для вывода результата.
</p>
<hr>
<br>
<h2>Переопределение методов</h2>
<p>
    Что такое переопределение методов? Переопределение методов в PHP — это процесс, 
    при котором дочерний класс наследует и замещает методы родительского класса. 
    Дочерний класс может переопределять и изменять поведение унаследованных методов,
    добавляя новую реализацию или изменяя существующую.
</p>
<p>
    чуть ниже пример.
</p>
<pre>
&lt;?php
class Animal {
public function speak() {
echo "Говорит животное!";
}
}

class Dog extends Animal {
public function speak() {
echo "Гав-гав!";
}
}

$dog = new Dog();
$dog->speak(); // Гав-гав!
?&gt;
</pre>
<p>
Ну а здесь  мы создали родительский класс Animal с методом speak() и дочерний класс Dog, который 
расширяет класс Animal и переопределяет метод speak().
</p>
<hr>
<br>
<h2>
    Конструкторы и наследования. 
</h2>
<p>
    Что такое конструкторы в PHP?
Конструкторы в PHP — это специальные методы, которые вызываются при создании объекта. 
Они используются для инициализации свойств объекта и выполнения начальных настроек. 
В PHP конструктор определяется с помощью метода __construct.
</p>
<p>Чуть ниже пример</p>
<pre>
&lt;?php
class MyClass {
public function __construct() {
$this->property = 'значение';
}
}

$obj = new MyClass();
?&gt;
</pre>
<hr>
<br>
<p>
    Что такое наследование? — Это способность одного класса наследовать свойства и методы другого класса.
    Это позволяет создавать новые классы на основе существующих, упрощая повторное использование кода
    и его расширение. В PHP наследование осуществляется с использованием ключевого слова extends.
</p>
<p>
    Пример ниже.
</p>
<pre>
&lt;?php
class Animal {
 public $name;

 public function __construct($name) {
 $this->name = $name;
 }

 public function speak() {
 echo "Animal sound";
 }
}

class Dog extends Animal {
 public function speak() {
 echo "Woof!";
 }
}

$dog = new Dog("Buddy");
$dog->speak(); // Выведет: Woof!
?&gt;
</pre>
<hr>
<br>

<pre>
&lt;?php

?&gt;
</pre>
<hr>
<br>

</body>
</html>