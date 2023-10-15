<?php
    class hewan{
        public $klasifikasi;
        protected $habitat='Dua Alam (Darat dan Air)';

        public function panggil_nama($nama){
            return $this->klasifikasi=$nama;
        }

        public function panggil_habitat(){
            return $this->habitat."<br>";
        }
    }

    class amfibi extends hewan{
        public $jenis_hewan;
        private $species=" Kepiting Soka";

        public function panggil_hewan($jenis){
            $this->jenis_hewan=$jenis;
        }

        public function panggil_species(){
            return $this->jenis_hewan." memiliki banyak species, salah satunya yaitu ".$this->species."<br>";
        }
    }

    $kep = new Amfibi();

    $kep->panggil_nama("Amfibi");
    $kep->panggil_hewan("Kepiting");

    echo $kep->klasifikasi." merupakan hewan yang hidup di ".$kep->panggil_habitat();
    echo $kep->jenis_hewan." merupakan salah satu hewan Amfibi <br>";
    echo $kep->panggil_species();