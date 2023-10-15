<?php
    class mahasiswa{ //membuat class
    //membuat property atau atribut
        var $nim;
        var $nama_mhs;
        var $alamat;
    
    //membuat construct
    function __construct()
    {
        echo "Saya mahasiswa Teknik Informatika <br>";
    }

    //membuat destruct
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
    
    //method untuk menampilkan nama
    function tampil_nama(){
        return "Nama saya adalah Dea Lestari<br>";
    }

    //method untuk menampilkan nim
    function tampil_nim(){
        return "NPM : 220202032<br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat(){
        return "Saya bertempat tinggal di Jl.Wiling, Donan<br>";
    }

    //method untuk menampilkan mahasiswa
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki hingga lulus kuliah <br>";
    }
    }

    //membuat objek nama_mahasiswa
    $nama_mhs = new mahasiswa();

    //menampilkan object ke layar
    echo $nama_mhs->tampil_nama();
    echo $nama_mhs->tampil_nim();
    echo $nama_mhs->tampil_alamat();
    echo $nama_mhs->tampil_mahasiswa();
?>