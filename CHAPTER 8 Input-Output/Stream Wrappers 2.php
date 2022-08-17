<?php
$handle = fopen("info.txt", 'a+');
stream_filter_append($handle, 'string.rot13');
while (!feof($handle)) {
    echo fread($handle,1024);
}