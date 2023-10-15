<?php
    class mahasiswa{ //membuat class
    //membuat property atau atribut
        var $nim;
        var $nama_mhs;
        var $alamat;
    
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
        return "Saya bertempat tinggal di Jl.Wiling, Donan<br><br>";
    }
    }

    //membuat objek nama_mahasiswa
    $nama_mhs = new mahasiswa();

    //menampilkan object ke layar
    echo $nama_mhs->tampil_nama();
    echo $nama_mhs->tampil_nim();
    echo $nama_mhs->tampil_alamat();
?>

<?php
    class dosen{
        var $nidn;
        var $nama;
        var $prodi;
    
    function tampil_nidn(){
        return "NIDN : 20977685<br>";
    }

    function tampil_nama(){
        return "Perkenalkan nama saya Dea Lestari<br>";
    }

    function tampil_prodi(){
        return "Saya mengajar di Prodi Teknik Informatika<br>";
    }
    }

    $nama = new dosen();

    echo $nama->tampil_nidn();
    echo $nama->tampil_nama();
    echo $nama->tampil_prodi();
    ?>