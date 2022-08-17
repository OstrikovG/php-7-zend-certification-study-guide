<?php
function myFunc(?MyObject $myObj)
{
    echo "hello world";
}
// this is allowed
myFunc(null);
// this produces a fatal error: Too few arguments
myFunc();