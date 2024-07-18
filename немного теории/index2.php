<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Глава 2.</title>
</head>
<body>
    <h1>Глава 2.</h1>
    <p>Перед началом обсудим пару нюнсов.</p>
    <p>Работу PHP кодов которые у нас будут да и в общем это относиться
        ко всем. Это проверяется в режиме интепритатора. Для этого требуется 
        сохранить необходимый файл в расширении .php и выполнять
        необходимую инструкцию в командной строке. 
    </p>
    <p>
    Хорошим выбором для разработки PHP-проектов к примеру это
    среда разработки NetBeans.Она позволяет работать как в режиме
    тестирования какв режиме интепритатора так и в режиме локального сервера.
    </p>
    <p>
    Для проверки коректности работы программ в режиме сервера нужно размещать
    их в следующий шаблон.
    </p>
    <pre>
    &lt;?php
    print ("Hello world PHP!!!");
    ?&gt;
    </pre>
    <p>Если подзабыли то это мы обсуждали в 1 главе</p>
    <hr>
    <br>
    <h2>Переменные типы данных</h2>
    <p>
    Что такое переменная в общих чертах? Переменная представляет собой
    именованый блок памяти к которому можно обращаться по имени для
    считывания значения из памяти и записи туда нового значения.
    В PHP переменная создается довольно просто, присваем ей значение.
    Ну или по другому переменная появляется тогда когда мы присваиваем
    какое то значение.   
    </p>
    <p>
    В PHP начало переменной начинаетсясо знака $
    (этот символ является частью имени переменной)    
    Чтобы присвоить имя переменной указывается название пременной и через
    оператор присваивания (это является знак = равенства)приcваивается переменной
    значение.Например, командой $number=345 переменной $number присваемое 
    целочисленное значение 345.
    </p>
    <p>
    В PHP тип переменной как понятие отсутсвует. Тоесть у пременной нет своего типа.
    Но есть тип значения на который она ссылается. На разных этапах выполнения
    программы одна и таже переменная может ссылаться на разные типы данных.   
    </p>
    <h2>Дополнение</h2>
    <p>
    На всякий случай для тех у ково PHP язык является первым и слабо знаком 
    в общем с программированием. В PHP существуют коментарии. Коментарии это
    текст для програмистов и игнорируемый при выполнении команды.
    Коментарии являются подсказками и объясняют значение команд. Всего их
    два вида это однострочные и многострочные.
    </p>
    <p>
    Теперь о разнице между двойными и одинарными кавычками в переменных.    
    </p>
    <p>
    При выполнении команды print 'Перменная $number: ' отображается строго то текст,
    что указан одинарных кавычках.
    </p>
    <p>
    При выполнении команды print "Перменная $number: " будет подставляться уже 
    само содержимое(то что внутри ее) этой переменной.
    </p>    
    <br>
    <hr>
    <h2>Константы</h2>
    <p>
    Кроме переменных в PHP могут применяться константы. Разница между ними в том
    значение константы изменить нельзя. Для создания константы используется
    функция <strong>define ( ).</strong>
    </p>
    <p>
        Первым аргументом передется ее имя, вторым аргументом указывается ее значение.
    </p>
    <p>
        Символ $ в названии константы не применяется.
    </p>
    <p>
        Чтобы не путаться название констант принято записывать с большыми прописными
        буквами, к примеру вот такой командой define ("NUMBER", 123) определяется
        константа NUMBER c ее значением 123.
    </p>
    <p>
        Для проверки существует ли константа с определенным именем, применяем
        функцию define ( ). Аргументом функции передается название константы,
        эта записывается в кавычки.
    </p>
    <hr>
    <br>
    <h2>Основные типы данных</h2>
    <p>
        Для повторения вспомним что <strong>У переменных нет своего типа данных, 
        но есть тип значения на которое ссылается эта переменная</strong>
    </p>
    <p>    
        Для опреления типа значения используем функцию <strong>gettype ( ).</strong>
        Аргументом функции передается переменная. Результатом функции возвращается текст
        с названием типа значения на которое ссылается переменная
    </p>
    <ul>
        <li>Значения:</li>
        <li>целочисленное - integer</li>
        <li>с плавающей запятой - double</li>
        <li>текст - string</li>
        <li>булевые значения - true и false</li>
        <li>массив - array</li>
        <li>объект - object</li>
        <li>ссылка на внешний ресурс - resource</li>
        <li>отсутвие значения - NULL</li>
    </ol>
    <hr>
<pre>&lt;?php
    // Целочисленые значения;
    $value=123;
    echo $value," => тип ", gettype($value),"\n";//выведет тип integer
    <hr>
    // Текстовое значение;
    $value="текст";
    echo $value," => тип ", gettype($value),"\n";//выведет тип string
    <hr>
    // Действительное число;
    $value=22.3;
    echo $value," => тип ", gettype($value),"\n";//выведет тип double
    <hr>
    // Пустая строка;
    echo $VALUE," => тип ", gettype($VALUE),"\n";//выведет тип NULL
?&gt;</pre>
    <hr>
    <br>
    <p>Запомнить</p>
    <strong>
        \n это одна из управляющих символов. Если ее разместить в тексте заключенных в двойные
        кавычки то в это месте бкдет переход на другую строку.
        Существуют и еще инструкции для разных действий.
    </strong>
    <h2>Дополнение</h2>
    <p>
        <strong>
        Переменные чуствительны к регистру, тоесть одно и тоже название написанное
        с большой буквы или же с маленькой считаются разными переменными.
        </strong>
    </p>
    <p>
        В PHP существует группа ф-й прзволяющяя проверить данные на 
        принадлежность к определенному типу.
    </p> 
    <p>  
        is_array ()
        (ссылается переменная на массив),
    </p>
    <p>
        is_bool ()
        (ссылается ли переменная на логическое значение),
    </p>
    <p>
        is_float ()
        (ссылается ли переменная на действительное число),
    </p>
    <p>
        is_int ()
        (ссылается ли переменная на целое число),
    </p>
    <p>
        is_null ()
        (является ли значением переменой пустая строка),
    </p>
    <p>
        is_numeric ()
        (ссылается ли переменная на число или строку с текстовым представлением числа),
    </p>
    <p>
        is_object ()
        (ссылается ли переменная на объект),
    </p>
    <p>
        is_resource ()
        (ссылается ли переменная на ресурс),
    </p>
    <p>
        is_acalar ()
        (ссылается ли переменная на скалярное значение),
    </p>
    <p>
        is_string ()
        (ссылается ли переменная на текст),
    </p>
    <hr>
    <br>
<h2>Подробней</h2>
<p> 
    Кроме ф-и settype (), для явного изменения типа значения, ипользуется инструкция
    вида (тип) (название типа в круглых скобках), котрая указывается перед значением
    тип которого надо преобразовать. К примеру: 
</p>
<p>
    (int) или (integer) -  к целочисленому типу.
</p>
<p>
    (bool) или (boolean) - к логическому типу.
</p>
<p>
    (string) - к текстовому типу.
</p>
<p>
    (float) или (double) (real)  - к действительному числовому типу.
    Последнюю инструкцию можно забыть ее вывели из использования в 8 версии.
</p>
<p>
    Есть и еще варианты инструкций. Как говорится гугл в помощь ну или
    документация.
</p>
<h2>Еще подробности</h2>
<p>
    Для проверки присвоено ли значение к некоторой пер-й используем ф-ю
    isset () (название проверяемой пе-й передается аргументом ф-и). 
    Чтобы удалить пе-ю ипользуем ф-ю unset ()
</p>
<hr>
<br>
<h2>Арифметические операции</h2>
<p>
    Обычные базовые арифметические операции которые выполняются с
    с п-ми и значениями разных типов. Условно их можно разделить
    на арифметические, логическкие и побитовые опрерации.
    Ну и отдельно можно выделить операции с текстом, операции
    связанные с присваиванием значений и тернарный оператор.
</p>
<ol>
    <li>Операция сложения +</li>
    <li>Операция вычитания -</li>
    <li>Операция умножения *</li>
    <li>Операция деления /</li>
    <li>Операция возведение в степень **</li>
    <li>Операция остаток от деления %</li>
</ol>
<p>
    Кроме выше перечисленых бинарных операторов есть и унарные 
    операторы инкремента ++ и декремента -- . Они также могут
    быть как префиксной так и постфиксной формы. Между префиксной
    и постфисной формой тоже есть разница. Оно заключается в том,
    что значение п-й в постфиксной форме оператора является 
    (старое, которое было до применения оператора)значение операнда,
    ну а значение п-й выражения с префиксной формой оператора инкремента
    или декремента является (новое, вычисление после применения оператора)
    значения операнда.Звучит запутано разберемся чуть ниже в примерах.
</p>
<h3>Подробней</h3>
<p>У бинарных операндов два оператора, у унарных один. Также
    префиксная и постфиксная форма у инкреметов и декрементов
    отличается тем, где они стоят. Тоесть перед операндом или
    после.
</p>
<h3>Немного примеров</h3>
<pre>&lt;?php
//переменные:
$A=5;

echo '[1] $A = ',$A, "\n" ; //выведет 5
$B=3;
//арифметические операции:
echo '[2] $B = ',$B,"\n";//выведет 3

echo '[3] $A + $B = ',$A + $B,"\n"; //выведет 8

echo '[4] $A - $B = ',$A - $B,"\n";//выведет 2

echo '[5] $A * $B = ',$A * $B,"\n";//выведет 15

echo '[6] $A / $B = ',$A / $B,"\n";//выведет 1.6666666666666667

echo '[7] $A ** $B = ',$A ** $B,"\n";//выведет 125

echo '[8] $A % $B = ',$A % $B,"\n";//выведет 2

$A++;
echo '[9] $A = ',$A,"\n";//выведет 6

$B--;
echo '[10] $B = ',$B,"\n";//выведет 2
?&gt;</pre>
<hr>
<br>
<h2>Операции сравнения</h2>
<p>
Служат для сравнения двух значений и возвращают логическое значение
true или false. Основные операторы сравнения включают:
</p>
<ol>
<li> == (равно) - проверяет, равны ли два значения.</li>
<li> != (не равно) - проверяет, не равны ли два значения.</li>
<li> === (идентично) - проверяет, равны ли два значения и имеют ли они одинаковый тип</li>
<li> !== (не идентично) - проверяет, не равны ли два значения или имеют ли они разные типы.</li>
<li> > (больше) - проверяет, больше ли первое значение второго.</li>
<li> < (меньше) - проверяет, меньше ли первое значение второго.</li>
<li> >= (больше или равно) - проверяет, больше ли или равно первое значение второму.</li>
<li> <= (меньше или равно) - проверяет, меньше ли или равно первое значение второму.</li>
</ol>
<p>
Эти операторы используются в условных выражения такие как if или while, для проверки условий
и выполнения каких то действий в зависимости от результата сравнения.
</p>
<hr>
<br>
<h2>Логические операции</h2>
<p>
    Служат для выполнения операций с операторами логического типа. Для их выполнения используют
    бинарные операторы & & (Логическое и) и || (логическое или) а также унарный оператор
    логического отрицания !.
</p>
<p>Выражение $A&&$B истинно только если истинны оба выражения</p>
<p>
    Значением  выражения вида $A||$B будет true если хотя бы один из операндом $A или $B или
    его значение приводится к true в результате автоматического привидения типов.
    Если же оба операнда имеют значения false то и результом всего выражения 
    будет значение false
</p>
<h3>На заметку</h3>
<p>
    Значения выражения $A||$B истинно если хотябы один входящий в это 
    выражение истинен.
</p>
<p>
    Учтем еще то, что выражения на основе операндов &&и|| вычисляются по упрощенной
    схеме слева на право. Тоесть если после вычиления первого операнда можно
    определить результат всего выражения то второй операнд не вычисляется.
</p>
<hr>
<br>
<p>Операция логического отрицания ! являются унарной. Значение выражения вида ! $A 
    будет true, если значение операнда $A будет равно false или сводится к значению
    false в результате автоматического преобразования типов.Если значене операнда
    типа $A будет true(или сводится к этому значению), то результатом будет 
    выражения будет ! $A будет false.
</p>
<h3>Подробности</h3>
<p>У операндов && и || есть двойники - это and и or</p>
<p>Разница же между ними это то что and и or имеют более низкий приоритет,
    иногда это бывает удобно.
</p>
<hr>
<br>
<h2>Побитовые операции.</h2> 
<p>
Побитовые операции выполняются на уровне двоичного(побитового)представления числа.
Они включают в себя побитовое отрицание, побитовое И, побитовое ИЛИ, 
побитовое исключающее ИЛИ (XOR), а также различные виды битовых сдвигов
(логический, арифметический, циклический).
</p>
<ul>
    <li>
    Побитовое отрицание (~) — инвертирует все биты числа.
    <?php
    $a = 6; // В двоичном представлении 0110
    $b = ~$a; // Инвертирует все биты, получаем 1001 (что равно 9 в десятичной системе счисления)
    echo $b; // Выведет 9
    ?>
    </li>
    <li>
    Побитовое И (&) — сравнивает соответствующие биты двух чисел и возвращает 1, 
    если оба бита равны 1, иначе 0.
    <?php
    $a = 6; // В двоичном представлении 0110
    $b = 3; // В двоичном представлении 0011
    $c = $a & $b; // Сравниваем биты, получаем 0010 (что равно 2 в десятичной системе счисления)
    echo $c; // Выведет 2
    ?>    
    </li>
    <li>
    Побитовое ИЛИ (|) — сравнивает соответствующие биты двух чисел и возвращает 1, если хотя бы один бит равен 1, иначе 0.    
    <?php
    $a = 6; // В двоичном представлении 0110
    $b = 3; // В двоичном представлении 0011
    $c = $a | $b; // Сравниваем биты, получаем 0111 (что равно 7 в десятичной системе счисления)
    echo $c; // Выведет 7
    ?>
    </li>
    <li>
    Побитовое исключающее ИЛИ (^) — сравнивает соответствующие биты двух чисел и возвращает 1,
    биты различаются, иначе 0.
    <?php
    $a = 6; // В двоичном представлении 0110
    $b = 3; // В двоичном представлении 0011
    $c = $a ^ $b; // Сравниваем биты, получаем 0101 (что равно 5 в десятичной системе счисления)
    echo $c; // Выведет 5
    ?>
    </li>
    <li>
    Битовые сдвиги — позволяют перемещать биты числа влево или вправо. Это делается
    с помощью операторов << (сдвиг влево) и >> (сдвиг вправо). 
    <?php
    $a = 6; // В двоичном представлении 0110
    $b = $a << 1; // Сдвигаем биты влево на 1 позицию, получаем 1100 (что равно 12 в десятичной системе счисления)
    echo $b; // Выведет 12
    ?>  
    </li>
</ul>
<h2>Работа с текстом в побитовых операциях.</h2>
<p>
Побитовые операции могут быть применены к строкам, если они используются для работы
с кодами ASCII каждого символа строки. В этом случае, операция будет выполнена над
каждым символом строки, преобразуя их в целые числа и обратно в символы после операции.
Например, если хотим выполнить операцию И над двумя строками, то каждый символ первой
строки будет сравнен с соответствующим символом второй строки, используя коды ASCII. 
Если код ASCII первого символа больше или равен коду ASCII второго символа, то 
результирующий символ будет иметь тот же код ASCII, что и первый символ. 
В противном случае, результирующий символ будет иметь код ASCII 0.
Однако, если вы работаете с текстом как с обычными строками, без использования кодов
ASCII, побитовые операции не применимы напрямую. В таких случаях, вам потребуется
преобразовать строки в целые числа, выполнить побитовую операцию и затем преобразовать
результат обратно в строку.
Пример:
$string1 = "Hello";
$string2 = "World";

// Преобразуем строки в массивы кодов ASCII
$ascii1 = str_split($string1);
$ascii2 = str_split($string2);

// Выполняем операцию И над кодами ASCII каждого символа
$result = array_map(function($char1, $char2) {
return ord($char1) & ord($char2);
}, $ascii1, $ascii2);

// Преобразуем массив кодов ASCII обратно в строку
$resultString = implode('', $result);

echo $resultString; // Выведет "HdlroW"
<hr>
<br>
<h2>Операции с текстом</h2>
<p>
    Давай вспомним что текст можно заключать как в одинарные, так и двойные кавычки.
    Ну и если в двойных кавычках заключено название п-й, то вместо названия этой
    п-й подставляется значение этой п-й.Также в такой текст можно вставлять 
    управляющие символы состоящие из обратной косой черты \ и необходимый 
    нам символ для выполнения операции.
</p>
<p>
    Например - \n - означает переход к новой строке, а \t - это табуляция.Для
    вставки в текст обратной косой черты\, символа доллара $, одинарных '', и 
    двойных кавычек "", можно использовать инструкции \\, \$, \' и \\" .
</p>
<hr>
<br>
<h2>Конкатенация строк</h2>
<p>
    В PHP конкатинация(склевание или сложение) строк производится при помощи
    оператора . "точка" пример ниже:
</p>
<pre>
&lt;?php
    $first_name = "Иван";
    $last_name = "Иванов";
    $full_name = $first_name . " " . $last_name;
    echo $full_name; // Выведет "Иван Иванов"
?&gt;
</pre>
<p>
    В PHP оператор + для сложения строк не используется. А если все же попытаться
    то получится не совсе то, что ожидаем. К примеру ввыражение:  "1"+"2" будет
    не текст "12" а число. Это произошло из-за того что оператор + арифметический
    поэтому "1" и "2" преобразуется в числа. Далее произойдет обычное сложение.
</p>
<p>
    Также к простым операциям со строками относятся. Опрелениt длины строки 
    при помощи ф-ии strlan(). Сравнить строки на предмет равенства не равнства можно
    при помощи операторов == и != опять же не забывыаем о автоматическое приведение 
    типов. Так что иногда лучше применять для этого операторы сравнения ===и!==.
    Также для сранения можно применить ф-ю strcmp()(Сравнение с учетом регистра) И
    srtrcasecmp()(Сравнение без учета регистра).
</p>
<p>
    Вот еще несколько операций для работы с текстом.
    substr() //ф-я для выделение подстроки из строки.
    str_ireplace //ф-я для замены строки в подстроке
</p>
<hr>
<br>
<h2>Присваивание значения</h2>
<p>
    В PHP оператор присваивания возвращает значение.Это значит что выражение с 
    оператором присваивания может быть само операндом в другом выражении.
    Выражения вида переменная=значение является значением переменной в левой 
    части выражения.К примеру после команды выполнения $A=(;B=100)+1 переменная
    $A получит значение 101 а у переменной $B будет значение 100.
</p>
<hr>
<br>
<h2>Тернарный оператор</h2>
<p>
    Обычно тернарные операторы бывают унарными(с одним операндом) и 
    бинарыми(с двумя операндами) и один единственный с тремя 
</p>
</body>
</html>