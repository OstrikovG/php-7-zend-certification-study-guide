<?php
$strings = [
    'Next monday',
    'Yesterday',
    '', // now
    '2016-12-25',
    '25 December 2016',
    '-1 week',
    '+1 days'
];
foreach ($strings as $example) {
    $dateTime = new DateTime($example);
    echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;
}