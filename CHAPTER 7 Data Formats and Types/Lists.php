<?php
$stack = new SplStack();
$stack->push(5);// stack Contains 5
// this uses array syntax to add a new element
$stack[] = 4;// 5, 4
// now we push another number to the end of queue
$stack->push(3);// stack Contains 5, 4, 3
// this inserts the number 100 into position 1
// elements below it are shuffled down
$stack->add(1, 100);// stack Contains 5, 100, 4, 3
// this returns the last value in the queue
echo "Pop: " . $stack->pop() . PHP_EOL;// stack Contains 5, 100, 4
foreach ($stack as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}