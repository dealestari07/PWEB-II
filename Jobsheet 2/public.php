<?php
//membuat class mahasiswa
    class Mahasiswa{
        //property/atribut nama
        public $nama;
        private $nim=220202032;
        
        //membuat public method
        public function tampilkan_nama(){
            return "Nama saya Dea Lestari <br>";
        }

        //membuat protected method tampilkan_nim
        function tampilkan_nim(){
            return "NIM saya ".$this->nim;
        }
    }
    //instasisasi objek mahasiswa ke dalam variabel mahasiswa
    $mahasiswa = new Mahasiswa();
    $nim = new Mahasiswa();

    //memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama();
    echo $nim->tampilkan_nim();