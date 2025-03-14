<?php

// class Mahasiswa
// {
//   private $nama;
//   public $nim;
//   public $semester;

//   public function __construct($nama)
//   {
//     $this->nama = $nama;
//   }

//   public function sayangSayangan($nama)
//   {
//     echo $nama . "sayang... <br/>";
//   }

//   public function getNama()
//   {
//     return $this->nama;
//   }

//   public function setNama()
//   {
//     return $this->nama;
//   }

// }

// $siti = new Mahasiswa('Siti Munaroh');
// $tono = new Mahasiswa('Tono Suhartono');

// echo @$siti->getNama() . "<br>";
// echo @$tono->getNama();


class Hewan {
  public $nama;
  public $spesies;
  public $habitat;
  public $jumlah_kaki;
  public $makanan;
}

class Mamalia extends Hewan {
  public $melahirkan;
  public $berbulu;
}

class Reptil extends Hewan {
  public $bertelur;
  public $berdarahdingin;
}

$kucing = new Mamalia();
$kucing->nama = "Kucing";
$kucing->spesies = "Felis catus";
$kucing->habitat = "Hutan";
$kucing->jumlah_kaki = 4;
$kucing->makanan = "Ikan";
$kucing->melahirkan = "Ya";
$kucing->berbulu = "Ya";

$ular = new Reptil();
$ular->nama = "Ular";
$ular->spesies = "Crotalus horridus";
$ular->habitat = "Desa";
$ular->jumlah_kaki = 0;
$ular->makanan = "Ikan";
$ular->bertelur = "Tidak";
$ular->berdarahdingin = "Tidak";






?>