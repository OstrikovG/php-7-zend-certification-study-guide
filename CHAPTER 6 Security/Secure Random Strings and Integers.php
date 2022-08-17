<?php
// get a string that contains 8 random bytes
$randomBytes = random_bytes(8);
$printableVersion = bin2hex($randomBytes);
echo $printableVersion;