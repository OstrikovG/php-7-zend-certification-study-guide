<?php
$catfood = new stdClass();
$catfood->name = "Cheeseburgers";
$cat = new stdClass();
$cat->canhaz = [$catfood];
echo "$cat->canhaz[0]->name"; // array to string conversion
echo "{$cat->canhaz[0]->name}"; // Cheeseburgers