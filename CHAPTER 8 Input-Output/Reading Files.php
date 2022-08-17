<?php
$handle = fopen('info.txt', 'r');

while (!feof($handle)) {
    echo fread($handle,1024);
}