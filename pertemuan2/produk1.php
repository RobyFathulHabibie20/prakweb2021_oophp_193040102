<?php

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new Produk(); 
//$produk1->judul = 'OnePiece';
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = 'GTAV';
//$produk2->tambahProperty = 'hihih';
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "OnePiece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Tafarglaw D. Water Law";
$produk3->harga = 50000;
var_dump($produk3);

//echo "Komik : $produk3->penulis, $produk3->penerbit";
//echo "<br>";
//echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "GTAV";
$produk4->penulis = "Ucok";
$produk4->penerbit = "Rockstars";
$produk4->harga = 150000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();