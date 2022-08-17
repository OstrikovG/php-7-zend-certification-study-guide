<?php
// finfo will return the mime type
$finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic");
/* get mime-type for a specific file */
$filename = "info.txt";
echo $finfo->file($filename);