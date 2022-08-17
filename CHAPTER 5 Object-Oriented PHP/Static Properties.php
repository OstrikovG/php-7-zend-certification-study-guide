Static properties are also declared with the static keyword and can be accessed with the
scope resolution operator.
For example:
<?php
class Foo
{
    // Static properties are declared with the static keyword
    private static $message = 'Hello World';
    public function __construct() {
        // Static properties can be accessed with the scope resolution operator.
        echo self::$message;
    }
}
$foo = new Foo; // Hello World
echo Foo::$message; // PHP Fatal error: Cannot access private property Foo::$message