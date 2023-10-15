<?php
    class manusia{
        public $nama_saya;
        protected $nik="330398340003";

        function panggil_nama($saya){
            $this->nama_saya=$saya;
        }

        function panggil_nik(){
            return "NIK saya : ".$this->nik;
        }
    }
    //class turunan atau sub class dari class manusia
    class mahasiswa extends manusia{
        public $nama_mhs;
        private $alamat="Cilacap";

        function panggil_mhs($mahasiswa){
            $this->nama_mhs = $mahasiswa;
        }

        public function panggil_alamat(){
            return "Saya tinggal di : ".$this->alamat;
        }
    }

//instasiasi class
$informatika = new mahasiswa();
$informatika->panggil_nama("Dea");
$informatika->panggil_mhs("Lestari");
echo "Nama saya : ".$informatika->nama_saya." ".$informatika->nama_mhs."<br>";
echo $informatika->panggil_nik()."<br>";
echo $informatika->panggil_alamat()."<br>";
?>
