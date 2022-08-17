<?php
$address = "09479 Huopainenkylä, Pöhjois-Karjala";
$address = strtr($address, "äåö", "aao");
echo $address; // 09479 Huopainenkyloa, Pohjois-Karjala