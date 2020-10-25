<?php
$koneksi = mysqli_connect("localhost","root","","db_absen");

if(!$koneksi){
    echo "tidak terhubung database";
}