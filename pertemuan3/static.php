<?php

/*
Roby Fathul Habibie
193040102
https://github.com/RobyFathulHabibie20/prakweb2021_oophp_193040102.git
Pertemuan 3,  24 september 2021
Mengerjakan tugas 6
*/


/*class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}


echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo(); */


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

