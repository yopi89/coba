<?php
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        echo "Nama : " .$this->nama. "<br>";
        echo "NIM : " .$this->nim. "<br>";
        echo "Jurusan : " .$this->jurusan. "<br>";
    }
}

// Membuat objek Mahasiswa dan mengisi data
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
$mahasiswa1->tampilkanData();
?>
