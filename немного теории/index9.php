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
<p>
В PHP можно сделать так, чтобы один интерфейс наследовал методы другого интерфейса. 
Для этого используется ключевое слово extends.
</p>
<hr>
<br>
<h2>Трейты</h2>
<p>
Трейты в PHP — это как бы готовые блоки кода, которые можно вставить в любой класс. 
Они похожи на классы, но не такие самостоятельные. С их помощью можно сделать так, 
чтобы один и тот же код работал в разных классах.
Трейты помогают не писать один и тот же код много раз, а использовать уже готовый. 
Они похожи на абстрактные классы, но отличаются тем, что у них есть методы с реализацией.
Чтобы использовать трейт, нужно добавить его в класс с помощью оператора use.
</p>
<p>
Пример трейта:    
</p>
<pre>
&lt;?php
trait Singleton {
private static $instance;
public static function getInstance() {
if (!(self::$instance instanceof Singleton)) {
self::$instance = new self;
}
return self::$instance;
}
}
?&gt;
</pre>

<p>
Преимущества использования трейтов:
Минимизация дублирования кода: Трейты позволяют избежать дублирования кода, 
это улучшает читаемость и поддержку кода.
Гибкость: Трейты могут быть включены в несколько классов, находящихся в разных иерархиях,
что делает код более гибким.
Расширяемость: Трейты позволяют расширять функциональность классов без необходимости изменения их структуры.
Пример использования трейтов:
</p>
<pre>
&lt;?php
class DbReader extends ArrayObject {
use Singleton;
}

class FileReader extends SplFileObject {
use Singleton;
}
?&gt;
</pre>
<hr>
<br>
<h2>Контроль типа объекта</h2>
<p>
Контроль типов. Это значит, что функции и классы могут требовать, чтобы параметры 
были определённого типа. Например, это может быть объект определённого класса, 
интерфейс, массив (начиная с PHP 5.1) или колбек с типом callable (начиная с PHP 5.4).
примеры ниже.
</p>
<hr>
<br>

<pre>
&lt;?php
// Тестовый класс
class MyClass {
    /**
     * Тестовая функция
     * Первый параметр должен быть объектом типа OtherClass
     */
    public function test(OtherClass $otherclass) {
        echo $otherclass->var;
    }

    /**
     * Другая тестовая функция
     * Первый параметр должен быть массивом
     */
    public function test_array(array $input_array) {
        print_r($input_array);
    }

    /**
     * Первый параметр должен быть итератором
     */
    public function test_interface(Traversable $iterator) {
        echo get_class($iterator);
    }

    /**
     * Первый параметр должен быть типа callable
     */
    public function test_callable(callable $callback, $data) {
        call_user_func($callback, $data);
    }
}

// Другой тестовый класс
class OtherClass {
    public $var = 'Hello World';
}
?&gt;
</pre>
<p>
    А если попробуем передать аргумент неправильного типа. Результатом будет фатальная ошибка.
</p>
<pre>
&lt;?php
// Экземпляры каждого класса
$myclass = new MyClass;
$otherclass = new OtherClass;

// Ошибка: Аргумент 1 должен быть экземпляром класса OtherClass
$myclass->test('hello');

// Ошибка: Аргумент 1 должен быть экземпляром класса OtherClass
$foo = new stdClass;
$myclass->test($foo);

// Ошибка: Аргумент 1 не должен быть null
$myclass->test(null);

// Работает: Выводит Hello World
$myclass->test($otherclass);
?&gt;
</pre>
<p>Контроль типов также работает с функциями:</p>
<pre>
&lt;?php
// Пример класса
class MyClass {
    public $var = 'Hello World';
}

/**
 * Тестовая функция
 * Первый параметр должен быть объект класса MyClass
 */
function myFunction(MyClass $foo) {
    echo $foo->var;
}

// Это работает
$myclass = new MyClass;
myFunction($myclass);
?&gt;
</pre>
<p>Вот пример контроля типов</p>
<pre>
&lt;?php
* Пример значения NULL */
function test(stdClass $obj = NULL) {
}

test(NULL);
test(new stdClass);
?&gt;
</pre>
<hr>
<br>
<h2>Пространство имен</h2>
<p>
Пространства имён в PHP позволяют группировать уникальные идентификаторы (имена) 
в абстрактные хранилища, что помогает избежать конфликтов имён при использовании сторонних библиотек.
</p>
<p>
    Создание пространства имен включает в себя.
</p>
<ol>
    <li>
        Создание пространства имен.
        Пример создания: 
<pre>
    namespace my\oneProject;
</pre>
    </li>
    <li>
        Использование классов имен.
        Пример создания класса в пространстве имен: 
<pre>
    namespace my\oneProject;
    class MyClass {
    }
</pre>
    </li>
    <li>
        Использование классов в других файлах. Пример:
<pre>
    //Для использования класса в другом файле нужно указать пространство имен. 
    require_once("myclass.php");
    $mc = new MyClass(); // Ошибка: класс не найден
    $mc = new my\oneProject\MyClass(); // Работает
</pre>
    </li>
    <li>
        Множественные пространства имен в одном файле: 
<pre>
    //Можно использовать несколько пространств имен в одном файле.Пример ипользования: 
    namespace Project;
    const CONNECT_OK = 1;
    class Connection {
    }
    function connect() {
    }

    namespace AnotherProject;
    const CONNECT_OK = 1;
    class Connection {
    }
    function connect() {
    }
</pre>
    </li>
    <li>
        Использование синтаксиса со скобками:
    <pre>
    //Если нужно использовать несколько пространств имён в глобальном коде, 
    //используем синтаксис со скобками.Пример:
    namespace Project {
    const CONNECT_OK = 1;
    class Connection {
    }
    function connect() {
    }
    }

    namespace {
    // Глобальный код
    session_start();
    $a = Project\connect();
    echo Project\Connection::start();
    }
    </pre>
    </li>
    <li>
        Определение пространства имен: 
    <pre>
    // Определение пространства имен должно быть первой строкой кода в файле. Пример: 
    namespace MySpace;    
    </pre>    
    </li>
    <li>
        Определение текущего пространства имен. Пример:
    <pre>
    // Для того чтобы узнать это - используем константу __NAMESPACE__
    namespace Project;
    echo '"', __NAMESPACE__, '"'; // Выведет "Project"
    </pre>     
        
    </li>
    <li>
        Динамическое конструирование имен. Пример: 
    <pre>
    namespace Project;
    function incl($classname) {
    $a = __NAMESPACE__. '\\'. $classname;
    return new $a;
    }
    </pre>    
    </li>
</ol>
<hr>
<br>
    <h2>Анонимные классы:</h2>
    <p>
    Анонимные классы в PHP — это классы, которые не имеют имени. Они полезны, 
    когда нужно создать объект класса, который будет использоваться только один раз и больше не понадобится.     
    </p>
    <ol>
        <li>
        Создание анонимного класса: 
        <pre>
//Для создания анонимного класса используется ключевое слово new, за которым следует 
//ключевое слово class и тело класса в фигурных скобках.Пример:
$person = new class {
public $name;
unction sayHello() {
echo "Hello!<br>";
}
};    
        </pre>    
        </li>
<li>
    Определение свойств и методов: 
<pre>
//Анонимные классы могут опрекделять свойства и методы как обычные классы: 
$person = new class {
    public $name;
    function sayHello() {
        echo "Hello!<br>";
    }
};
$person->sayHello();
$person->name = "Sam";
echo "Name: " . $person->name . "<br>"; // Hello!<br>Name: Sam
</pre>
</li>
<li>
    Определение конструкторов: 
<pre>
    //Анонимные классы могут определять конструкторы.
$person = new class("Bob") {
public $name;
function __construct($name) {
    $this->name = $name;
}
function sayHello() {
    echo "Hello!<br>";
}
};
echo "Hello, " . $person->name . "<br>"; // Hello, Bob  
</pre>
</li>
<li>
    Сокращенное определение св-в в конструкторе: 
<pre>
//Можно сократить определение класса определяя св-ва.Пример:
$person = new class("Bob", 34) {
    function __construct(public $name, public $age) {
        $this->name = $name;
    }
    function displayInfo() {
        echo "Name: $this->name; Age: $this->age<br>";
    }
};
$person->displayInfo(); // Name: Bob; Age: 34    
</pre>
</li>
</ol>

</body>
</html>