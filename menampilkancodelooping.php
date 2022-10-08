<?php

$jumlah_pesan = 0;

function tambah_pesan_1(){
    $GLOBALS['jumlah_pesan'] += 1;
}

function tambah_pesan_2(){
        $GLOBALS['jumlah_pesan'] += 1;
    return 1;
}

tambah_pesan_1();
tambah_pesan_1();
tambah_pesan_1();
tambah_pesan_1();

tambah_pesan_2();
tambah_pesan_2();
tambah_pesan_2();

echo $jumlah_pesan

?>