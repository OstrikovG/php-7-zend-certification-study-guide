<?php
class MathsHelper
{
    const PI = 4;
    public function squareTheCircle($radius) {
        return $radius * (self::PI ** 2);
    }
}
echo MathsHelper::PI; // 4