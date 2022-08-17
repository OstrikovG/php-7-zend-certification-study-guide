<?php
echo substr('abcdef', 1); // bcdef
echo substr('abcdef', 1, 3); // bcd
echo substr('abcdef', 0, 4); // abcd
echo substr('abcdef', 0, 8); // abcdef
echo substr('abcdef', -1, 1); // f