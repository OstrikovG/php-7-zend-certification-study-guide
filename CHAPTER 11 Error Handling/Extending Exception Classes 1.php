<?php
class ValidationException extends Exception { }
function myValidation() {
    if (empty($_POST)) {
        throw new ValidationException('No form fields entered');
    }
}

myValidation();