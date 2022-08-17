<?php
try {
    throw new \Exception();
} catch (Throwable $e) {
    echo "A class that inherits from either Exception or ErrorException was
caught";
}