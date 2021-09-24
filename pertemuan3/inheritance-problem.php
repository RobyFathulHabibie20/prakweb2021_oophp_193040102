<?php

/*
Roby Fathul Habibie
193040102
https://github.com/RobyFathulHabibie20/prakweb2021_oophp_193040102.git
Pertemuan 3,  24 september 2021
Mengerjakan tugas 1
*/

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
        $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Komik : OnePiece | Eiichiro Oda, Tafarglaw D. Water Law (Rp. 50000) - 500 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= " - {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("OnePiece", "Eiichiro Oda", "Tafarglaw D. Water Law", 50000, 500, 0, "Komik");
$produk2 = new Produk("GTAV", "Ucok", "Rockstars", 150000, 0, 25, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();