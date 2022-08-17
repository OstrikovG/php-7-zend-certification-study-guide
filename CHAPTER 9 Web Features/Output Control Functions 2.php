<?php
ob_start();
// this is a cli script
for ($i=1; $i<5; $i++) {
    echo $i;
    // each character is output one by one
    ob_flush();
    sleep(1);
}