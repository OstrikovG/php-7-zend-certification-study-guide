<?php
$burger = "Cheeseburger";
echo "I can haz {$burger}"; // I can haz Cheeseburger
echo "I can haz ${burger}"; // I can haz Cheeseburger
echo "I can haz $burgers"; // no variable $burgers
echo "I can haz {$burger}s"; // I can haz Cheeseburgers
echo "I can haz { $burger }"; // I can haz { Cheeseburger }