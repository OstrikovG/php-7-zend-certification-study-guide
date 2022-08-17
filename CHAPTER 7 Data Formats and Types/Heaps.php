<?php
class MyHeap extends SplHeap
{
    function compare($a, $b)
    {
        return $a <=> $b;
    }
}
$heapExample = new MyHeap;
$heapExample->insert(10);
$heapExample->insert(5);
$heapExample->insert(15);
while ($heapExample->valid()) {
    echo $heapExample->current() . PHP_EOL;
    $heapExample->next();
}