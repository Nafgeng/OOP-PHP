<?php
class Connection
{
public function connect()
{
throw new RuntimeException('Anda harus mengimplement
asikan method connect() sesuai dengan database driver yang A
nda gunakan.');
}
}
try {
$connection = new Connection();
$connection->connect();
} catch (RuntimeException $e) {
echo $e->getMessage();
echo PHP_EOL;
}
echo 'Ini tetap dieksekusi';
echo PHP_EOL;