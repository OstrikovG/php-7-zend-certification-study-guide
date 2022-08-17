<?php
// Locale is British English
setlocale(LC_MONETARY, 'en_GB.utf8');
echo money_format('%.2n', "5000000.123");
// Locale is Denmark
setlocale(LC_MONETARY, 'da_DK.utf8');
echo money_format('%.2n', "5000000.123");