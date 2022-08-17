<?php
$dateTime = DateTime::createFromFormat('d   -m-Y', '06-03-2013');
echo $dateTime->format(DateTime::COOKIE);
