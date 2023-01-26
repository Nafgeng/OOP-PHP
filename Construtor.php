<?php 

class Connection 
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    //method atau function construct adalah method yang dijalankan berbarengan dengan proses instansiasi (line 29)
    public function __construct($username, $password, $database, 
    $host = 'localhost', $port = 3306) {
        $this->username = "$username";
        $this->password = "$password";
        $this->database = "$database";
        $this->host = "$host";
        $this->port = "$port";
    }

    public function connect() {
        return new PDO(sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, $this->port, $this->database), $this->username, $this->password );
    }

}

//Kenapa kita disini memakai sebuah parameter?
//karena proses dibawah berjalan berbarengan dengan function construct sehingga jika ad mandatory parameter maka kita harus isi
$connection = new Connection('root', 'aden', 'quiz');
$pdo = $connection->connect();