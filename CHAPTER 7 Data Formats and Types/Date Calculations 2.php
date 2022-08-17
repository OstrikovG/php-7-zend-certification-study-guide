<?php
$dateTime = DateTime::createFromFormat('d-m-Y H:i:s', '01-12-2016 13:14:15');
$dateInterval = new DateInterval('P1M2DT3H4M5S');
$dateTime->add($dateInterval);
echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;