<?php
namespace MyApp\Helpers {
    class Formatters
    {
        public static function asCurrency($val) {
            return $val * 2; // statement
        }
    }
}

// this file is in a different namespace
namespace MyApp\Lib {
    // we must specify the full path to the namespace that the class is in
    echo \MyApp\Helpers\Formatters::asCurrency(10);
}
