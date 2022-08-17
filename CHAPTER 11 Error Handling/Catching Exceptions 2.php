<?php
class MyException extends Exception {}
class AnotherException extends Exception {}
try {
    throw new AnotherException;
} catch (MyException | AnotherException $e) {
    echo "Caught : " . get_class($e);
}
/*
Caught : AnotherException
*/