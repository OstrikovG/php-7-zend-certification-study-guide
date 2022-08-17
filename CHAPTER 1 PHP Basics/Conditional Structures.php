<?php
$value = 10;
switch ($value) {
    case '10' :
        echo "Value is 10";
    case '20' :
        echo "Value is 20";
        break;
    case '30' :
        echo "Value is 30";
        break;
    default:
        echo "Value is not 10,20, or 30";
        break;
}
// Value is 10Value is 20