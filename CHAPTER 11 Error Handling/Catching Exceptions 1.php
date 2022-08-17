<?php
class ValidationException extends Exception { }
function myValidation() {
    if (empty($_POST)) {
        throw new ValidationException('No form fields entered');
    }
}

try {
    // assume that if there is validation problem this throws a ValidationException
    myValidation();
} catch (ValidationException $e) {
    echo "Validation exception caught ";
    echo $e->getMessage();
} catch (Exception $e) {
    echo "General exception type caught";
}