<?php
$bucket = new SplObjectStorage();
$file = new StdClass;
$metaData = ['name' => 'passwords.xslx', 'size' => '102400'];
$bucket[$file] = $metaData;