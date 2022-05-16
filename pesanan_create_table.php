<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE pesanan_kamarhotel(
    kode_pesanan varchar(5) PRIMARY KEY, 
    nama varchar(50),
    alamat varchar(50),
    check_in date,
    check_out date,
    uang_muka varchar(30),
    total_bayar varchar(30),
    status_pembayaran varchar(20)
);";

$hsl = mysqli_query($con, $sql);
    if($hsl){
        echo "Tabel pesanan_kamarhotel <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel pesanan_kamarhotel <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($con);