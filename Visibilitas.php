<?php

class Mobil
// kurawal dgn kurawal adalah lingkup class
{
private $roda = 4;
private function jalan()
{
echo 'Mobil berjalan';
}
public function jumlahRoda()
{
echo $this->roda;
}
}
// i=dibawah ini adalah lingkup objek
$avanza = new Mobil();
echo $avanza->jumlahRoda();
echo PHP_EOL;
?>

<!-- private hanya bisa digunakan di dalam class -->
<!-- klo classnya di akses ke class lain maka private tidak bisa digunakan namun protected dapat diakses -->