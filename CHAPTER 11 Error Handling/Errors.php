<?php
try {
    // generates a notice error (not caught)
    echo $thisVariableIsNotSet;
    // this would be a fatal error (is caught)
    badFunction();
} catch (Error $e) {
    echo $e;
    echo "Error caught: " . $e->getMessage();
}