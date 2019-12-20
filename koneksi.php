<?php

class database
{
    public $host = "localhost";
    public $usernamame = "root";
    public $password = "";
    public $database = "oop";
    public $koneksi = "";

    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->usernamame, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "koneksi database gagal " . mysqli_connect_error();
        }
    }

    public function tampilData()
    {
        $query = "SELECT * FROM barang";
        $result  = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($result)) {
            $temp[] = $row;

            return $temp;
        }
    }
}
