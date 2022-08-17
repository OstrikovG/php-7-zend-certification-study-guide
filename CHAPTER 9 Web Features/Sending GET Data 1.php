<?php
$getData = ['fans' => ['Ron', 'Jonathan', 'Anne Frank']];
// fans%5B0%5D=Ron&fans%5B1%5D=Jonathan&fans%5B2%5D=Anne+Frank
echo http_build_query($getData);