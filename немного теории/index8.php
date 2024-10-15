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
<h2>Наследование и закрытые члены</h2>
<p>
Наследование позволяет дочерним классам наследовать все общедоступные и защищённые методы, 
свойства и константы родительского класса. Однако закрытые методы родительского класса 
недоступны для дочернего класса. Это означает, что дочерние классы не могут переопределить
или использовать закрытые методы родительского класса. Начиная с PHP 8.0.0, единственное 
ограничение для закрытых методов — это конструкторы private final. Это позволяет «отключить»
конструктор при использовании статичных фабричных методов.Видимость методов,
свойств и констант можно ослабить, например, защищённый метод может быть помечен как
общедоступный, но нельзя ограничить видимость, например, нельзя пометить
общедоступное свойство как закрытое.
</p>
<pre>
&lt;?php
class A {
    public $prop;
    protected function walk() {
        // Do stuff here
    }
    private function swim() {
        // Do stuff here
    }
}

class B extends A {
    // Нельзя: read-write -> readonly
    public readonly $prop;
    // Нельзя переопределить закрытый метод
    private function swim() {
        // Do stuff here
    }
}
?&gt;
</pre>
<hr>
<br>
<h2>Защищенные члены класса</h2>
<p>
Защищенные члены класса в PHP доступны только внутри самого класса и его дочерних классов. 
Это означает, что защищенные методы, свойства и константы могут быть использованы как
в родительском классе, так и в его наследниках.
</p>
<p>Пример ниже</p>
<pre>
&lt;?php
// Базовый класс
class BaseClass {
    protected $protected = 'Защищенный';

    protected function displayProtected() {
        echo $this->protected;
    }
}

// Дочерний класс
class ChildClass extends BaseClass {
    public function displayPublic() {
        echo $this->protected; // Доступ к защищенному свойству
        echo $this->displayProtected(); // Доступ к защищенному методу
    }
}

// Создание объекта дочернего класса
$obj = new ChildClass();

// Доступ к защищенному свойству и методу
echo $obj->protected; // Не удастся, так как свойство защищено
$obj->displayPublic(); // Выведет "Защищенный"
?&gt;
</pre>
<ol>
    <li>
    В классе BaseClass свойство $protected и метод displayProtected() объявлены как защищенные.
    </li>
    <br>
    <li>
    В классе ChildClass, который наследуется от BaseClass, можно получить доступ
    к защищенным членам родительского класса.
    </li>
    <br>
    <li>
    Вне класса ChildClass нельзя получить доступ к защищенным членам, так как они 
    не видны за пределами класса.
    Таким образом, защищенные члены класса обеспечивают контроль доступа, позволяя дочерним 
    классам использовать эти члены, но ограничивая их видимость за пределами иерархии наследования.
    </li>
</ol>
<hr>
<br>
<h2>Виртуальные методы</h2>
<p>
В объектно-ориентированном программировании существуют виртуальные методы — это функции класса, 
которые могут быть изменены в классах-наследниках. При этом конкретная реализация метода будет
определяться во время выполнения программы.
Виртуальные методы — это ключевой инструмент для реализации полиморфизма в объектно-ориентированном
программировании.
</p>
<p>
    Для чего нужны виртуальны методы? Виртуальные методы — это как суперсила для программистов.
    Они позволяют работать с объектами, не зная точно, какой у них тип. Достаточно знать, 
    что это объект класса или его наследника.
    С помощью виртуальных методов можно написать код, который будет работать и с объектами 
    базового класса, и с объектами его наследников. Базовый класс определяет, как работать с объектами,
    а его наследники могут добавить свои фишки.Пример ниже.
</p>
<pre>
&lt;?php
class Animal {
    public function makeSound() {
        echo "Звука нет";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Гав-гав!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Мяу-мяу!";
    }
}

$animal = new Animal();
$animal->makeSound(); // Вывод: "Звука нет"

$dog = new Dog();
$dog->makeSound(); // Вывод: "Гав-гав!"

$cat = new Cat();
$cat->makeSound(); // Вывод: "Мяу-мяу!"
?&gt;
</pre>
<p>
В примере класс Animal определяет метод makeSound(), который является виртуальным.
Классы Dog и Cat наследуются от Animal и переопределяют метод makeSound(), предоставляя свою реализацию.
</p>
<hr>
<br>
<h2>Функция как значения поля</h2>
<p>
В PHP функции могут быть использованы как значения полей. Это позволяет хранить функции в 
переменных или передавать их в качестве аргументов другим функциям. Вот несколько примеров
использования функций как значений полей:
</p>
<p>
Пример 1: Хранение функции в переменной
</p>
<pre>
&lt;?php
function myFunction() {
    echo "Hello, World!";
}

$function = 'myFunction';

$function(); // Выведет "Hello, World!"
?&gt;
</pre>
<p>
    В этом примере функция myFunction хранится в переменной $function. Затем эта переменная вызывается,
    что приводит к выполнению функции.
</p>
<p>
    Пример 2: Передача функции в качестве аргумента другой функции
</p>
<pre>
&lt;?php
function callFunction($function) {
    $function();
}

function myFunction() {
    echo "Hello, World!";
}

callFunction('myFunction'); // Выведет "Hello, World!"
?&gt;
</pre>
<p>
В этом примере функция callFunction принимает в качестве аргумента другую функцию. 
При вызове callFunction с аргументом 'myFunction', функция myFunction выполняется внутри callFunction.
</p>
<p>
Пример 3: Использование анонимных функций (лямбда-выражений) Начиная с PHP 5.3, можно использовать
анонимные функции (также известные как лямбда-выражения). Это позволяет создавать функции на 
лету и передавать их в качестве аргументов другим функциям.  
</p>
<pre>
&lt;?php
function callFunction($function) {
    $function();
}

callFunction(function() {
    echo "Hello, World!";
});
?&gt;
</pre>
<p>
В этом примере функция callFunction вызывается с анонимной функцией, которая выводит “Hello, World!”.    
</p>
<hr>
<br>
<h2>
    Многоуровневое наследование
</h2>
<p>
В PHP есть такая штука — многоуровневое наследование. Это когда класс может взять свойства 
и методы не от одного, а от нескольких классов-родителей. А те, в свою очередь, тоже могут
брать что-то от других классов. Это удобно, потому что код становится более модульным и
его легче поддерживать.Пример ниже
</p>
<pre>
&lt;?php
// Базовый класс Vehicle
class Vehicle {
    public $model;
    public $current_speed;

    public function setSpeed($mph) {
        $this->current_speed = $mph;
    }

    public function getSpeed() {
        return $this->current_speed;
    }
}

// Класс Land, наследующий от Vehicle
class Land extends Vehicle {
    public $terrain;

    public function setTerrain($terrain) {
        $this->terrain = $terrain;
    }

    public function getTerrain() {
        return $this->terrain;
    }
}

// Класс Car, наследующий от Land
class Car extends Land {
    public $fuel_type;

    public function setFuelType($fuel) {
        $this->fuel_type = $fuel;
    }

    public function getFuelType() {
        return $this->fuel_type;
    }
}

// Создание объекта Car
$car = new Car();

// Установка свойств и вызов методов
$car->setSpeed(60);
$car->setTerrain('асфальт');
$car->setFuelType('бензин');

echo "Текущая скорость: " . $car->getSpeed() . "<br>";
echo "Тип местности: " . $car->getTerrain() . "<br>";
echo "Тип топлива: " . $car->getFuelType();
?&gt;
</pre>
<p>
В этом примере класс Car получил свойства и методы от классов Land и Vehicle. 
Это как если бы мы взяли две машины и сделали из них одну. У этой новой машины 
будут все характеристики и функции от двух старых.
</p>
<p>
Какие преимущества есть у такого насдедования?    
</p>
<ul>
    <li>
    Код получается более модульным и удобным для работы.
    </li>
    <li>
    В него легко вносить изменения, потому что они не влияют на другие части программы.    
    </li>
    <li>
    Логика программы становится понятнее и проще для поддержки.    
    </li>
</ul>
<hr>
<br>
<h2>Заключение по OOP</h2>
<p>
ООП в PHP — это как конструктор, который помогает делать код гибким, масштабируемым и легко поддерживаемым.
</p>
<p>
ООП работает через классы и объекты. Классы — это как шаблоны, а объекты — это готовые 
экземпляры этих шаблонов.
</p>
<p>
С помощью ООП можно разделить программу на кусочки, чтобы было проще понять, как она работает,
тестировать её и поддерживать.
</p>
<p>
Основные понятия ООП в PHP:
</p>
<ol>
    <li>Классы — это шаблоны, которые описывают свойства и методы объектов.</li>
    <li>Объекты — это готовые экземпляры классов.</li>
    <li>Наследование — это когда мы создаём новые классы на основе старых, чтобы не писать код заново.</li>
    <li>Полиморфизм — это когда объекты разных классов могут использовать одинаковые методы.</li>
    <li>Инкапсуляция — это когда мы прячем реализацию объекта от других частей программы, 
        чтобы они не знали, как он работает.</li>
</ol>











<hr>
<br>




</body>
</html>