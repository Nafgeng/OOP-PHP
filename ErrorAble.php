<?php
class Errorable
{
public static function calculate(int $number)
{
return ($number % 0);
}
}
try {
Errorable::calculate(7);
} catch (DivisionByZeroError $e) {
echo $e->getMessage();
echo PHP_EOL;
}
echo 'Ini tetap dieksekusi';
echo PHP_EOL;
