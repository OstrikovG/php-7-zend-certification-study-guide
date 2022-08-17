<?php
define('PI', 3.142);
echo PI;
define('UNITS', ['MILES_CONVERSION' => 1.6, 'INCHES_CONVERSION' => '2.54']);
echo "5km in miles is " . 5 * UNITS['MILES_CONVERSION'];
/*
 3.1425km in miles is 8
*/