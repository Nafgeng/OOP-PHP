<?php
abstract class Connection
{
abstract public function connect($database, $username, $password, $host = 'localhost');
}
class MySQLConnection extends Connection
{
public function connect($database, $username, $password,
$host = 'localhost')
{
/**
* Ceritanya ini logic koneksi ke database MySQL
*
* Anda tidak bisa menggunakan _keyword_ `parent` untuk memanggil _method_ `connect()` milik _parent class_
* karena akan mengakibatkan error.
**/
}
}
class PostgreSQLConnection extends Connection
{
public function connect($database, $username, $password,
$host = 'localhost')
{
/**
* Ceritanya ini logic koneksi ke database PostgreSQL
*
* Anda tidak bisa menggunakan _keyword_ `parent` untuk memanggil _method_ `connect()` milik _parent class_
* karena akan mengakibatkan error.
**/
}
}
class OracleConnection extends Connection {
    public function connect($database, $username, $password,$host = 'localhost'){}
}
