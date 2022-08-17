<?php
$waysToSayHello = [
    'emoji' => "\u{1F44B}",
    'latinchars' => "Hello",
    'accentedChars' => "ça va?"
];
foreach ($waysToSayHello as $method => $string) {
    echo "$method : encoding [" . mb_detect_encoding($string,
            'ISO-8859-1') . '] ' .
        'encoding [' . mb_detect_encoding($string, ['ASCII','UTF-8']) . '] ' .
        'strlen [' . strlen($string) . '] ' .
        'mb_strlen [' . mb_strlen($string) . '] ' .
        'first character[' . $string[0] . ']';
    echo "\r\n";
}
/*
emoji : encoding [ISO-8859-1] encoding [UTF-8] strlen [4] mb_strlen [1]
first character[ ]
latinchars : encoding [ISO-8859-1] encoding [ASCII] strlen [5] mb_strlen [5]
first character[H]
accentedChars : encoding [ISO-8859-1] encoding [UTF-8] strlen [7] mb_strlen
[6] first character[ ]
*/