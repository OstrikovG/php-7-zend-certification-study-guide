<?php
// Set locale to Dutch
setlocale(LC_ALL, 'nl_NL.utf8');
// Output: vrijdag 22 december 1978
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));