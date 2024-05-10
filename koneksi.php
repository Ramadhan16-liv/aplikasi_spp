<?php

$koneksi= mysqli_connect('localhost','root','','db_spp_adan');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}