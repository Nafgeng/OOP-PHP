<?php

// Untuk membuat sebuah method dapat mengembalikan sebuah nilai kita menggunakan keyword retur
// class Lingkaran
// {
// const PI = 3.14;
// public function luas($jari)
// {
// echo self::PI * $jari * $jari;
// }
// }
// $lingkaran = new Lingkaran();
// $lingkaran->luas(7);
// echo PHP_EOL;

// contoh penggunaan return value yg memasukkan kedalam sebuah variable
class Lingkaran
{
const PI = 3.14;
public function luas($jari)
{
return self::PI * $jari * $jari;
}
}
$lingkaran = new Lingkaran();
$luas = $lingkaran->luas(7);
echo $luas;
echo PHP_EOL;
?>
