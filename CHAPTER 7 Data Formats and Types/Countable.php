<?php
class BadCount implements Countable
{
    public function count()
    {
        return 42;
    }
}
$a = new BadCount;
echo count($a); // 42