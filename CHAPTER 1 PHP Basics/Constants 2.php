<?php
namespace Foo;
const AVOCADO = 6.02214086;
// using define() will generate a warning
define(MOLE, 'hill');
namespace Bar;
echo \Foo\AVOCADO;
// referencing the constant we tried to define() results in a fatal error
echo \Foo\MOLE;