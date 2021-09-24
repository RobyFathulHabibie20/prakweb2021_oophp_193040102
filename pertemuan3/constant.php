<?php

/*
Roby Fathul Habibie
193040102
https://github.com/RobyFathulHabibie20/prakweb2021_oophp_193040102.git
Pertemuan 3,  24 september 2021
Mengerjakan tugas 7
*/

/* 
define('NAMA', 'Roby Fathul Habibie');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR; */

/*
class Coba {
    const NAMA = 'Roby';
}

echo Coba::NAMA; */

// echo __DIR__;

/*
function coba() {
    return __FUNCTION__;
}

echo coba(); */

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;