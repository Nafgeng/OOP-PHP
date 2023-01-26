<?php
class mobil {
    // ini class
}

// class dengan function
// function adalah sifat class
class Mobil2{
    public function jalan() {
        echo 'Mobil berjalan';
    }
}

// class dengan property
// barang yg dimiliki oleh class
class mobil3{
    public $roda;
    public $pintu;
    public function jalan(){
        // variable lokal didalam oop
        $pintu = 4;
        echo 'mobil berjalan';
    }
}

$avanza = new mobil3();
$avanza -> roda = 4;

echo $avanza -> jalan();

// mandatori = parameter yg tdk punya default
class Koneksi {
    public function connect
        ($username, $password, $host = 'localhost', $port = 3306) {
            echo "$username, $password, $host, $port" . PHP_EOL;
    }
}

$database = new Koneksi();
$database -> connect('root', '');

?>