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
    // the "use" keyword imports the namespace
    use MyApp\Helpers\Formatters;
    // we no longer have to provide a full reference
    echo Formatters::asCurrency(10);
}
