<?php
$getData = ['fans' => ['Ron', 'Jonathan', 'Anne Frank']];
// fans%5B0%5D=Ron&fans%5B1%5D=Jonathan&fans%5B2%5D=Anne+Frank
$encodedString = http_build_query($getData);
// fans[0]=Ron&fans[1]=Jonathan&fans[2]=Anne Frank
echo urldecode($encodedString);