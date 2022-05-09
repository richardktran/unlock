Answer the following questions:

1. What is the difference between localStorage, sessionStorage, session and cookies?
2. What is the difference between a library, framework, CMS, and a language?
3. What is Cross-Origin Resource Sharing (CORS)?

# 1. OOP in PHP

### Class

Constructor:

```php
class className {
    function __construct() {
        print "In constructor\n";
    }
}
```

Constructor when inheritance:

```php
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}
```

Class Constant:

```php
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
				//Use constant inside of class
        echo  self::CONSTANT . "\n";
    }
}
//Use constant outside of class
echo MyClass::CONSTANT . "\n";
```

****Scope Resolution
Operator (::)[](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php#language.oop5.paamayim-nekudotayim)**

### Namespace

Print address of class in namespace

```php
namespace foo {
    class bar {
    }

    echo bar::class; // foo\bar
}
```

### Interface

An interface can be extended to another interface. A class implementing this interface must implement the function of
all interfaces.

```php
interface A
{
    public function foo();
}

interface B extends A
{
    public function baz(Baz $baz);
}

// This will work
class C implements B
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}
```

An abstract class may implement only a portion of an interface. And classes that extend the abstract class must
implement the rest.

```php
interface A
{
    public function foo(string $s): string;

    public function bar(int $i): int;
}
abstract class B implements A
{
    public function foo(string $s): string
    {
        return $s . PHP_EOL;
    }
}

class C extends B
{
    public function bar(int $i): int
    {
        return $i * 2;
    }
}
```

### Traits

Traits is necessary for reuse code and reducing some limitations of single inheritance.

```php
trait Database
{
    public function listUsers()
    {
        return "List users!";
    }
}

class Users
{
    use Database;

    public function reportUsers()
    {
        $this->listUsers();
    }
}
```

A problem is that when I want to use a method in class A but simultaneously we have the same method in class B. So, how
to know what we want to use?

Suppose that we have 2 traits Admin and Authenticate and both have the 2 same methods checkLogin and isAdmin. We want to
use checkLogin in Authenticate traits and use isAdmin in Admin traits:

```php
trait Admin
{
    public function checkLogin()
    {
        return "Check login";
    }

    public function isAdmin()
    {
        return "Ok";
    }
}

trait Authenticate
{
    public function checkLogin()
    {
        return "Check login";
    }

    public function isAdmin()
    {
        return "Ok";
    }
}

class Users
{
    use Authenticate, Admin
    {
        Authenticate::checkLogin insteadof Admin;
        Admin::isAdmin insteadof Authenticate;
				Admin::checkLogin as adminCheckLogin;
    }

    public function __construct()
    {
        $this->checkLogin();
        $this->isAdmin();
				$this->adminCheckLogin();
    }
}
```

The parent of the trait is the parent of the class which uses this trait.

```php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

//RESULT
//Hello world!
```

### Anonymous class

```php
class A
{
    public function f($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new A());

// Using an anonymous class
$util->setLogger(new class (arg if have) {
    public function f($msg)
    {
        echo $msg;
    }
});
```

# 2. Session and Cookie in PHP

### Session

The session is used for storing information of the user, each client has a unique ID session so it is kind of hard to
affect between the information of client A and client B.

- Regist a session: `**session_start()**`
- Storing a session: All sessions will have storage at `**$_SESSION**`. So, to storing a session, we
  use `**$_SESSION['session_name'] = $session_value**`
- Destroy a session: `**unset($_SESSION['name']);**`
- Destroy all sessions: `**session_destroy();**`

### Cookie

- T o store a cookie: **`setcookie($name, $value, $expire, $path, $domain)`**
- Get value of a cookie: `**$_COOKIE['name'];**`
- Destroy a cookie: `**setcookie("name", "", time()-3600);**`

# 3. PHP Standards Recommendations

### PSR-4: Autoloader:

<aside>
💡 **Autoloaders** remove the complexity of including files by mapping namespaces to file system paths.

</aside>