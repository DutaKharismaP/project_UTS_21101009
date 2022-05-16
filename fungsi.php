<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO pesanan_kamarhotel (kode_pesanan, nama, alamat, check_in, check_out, uang_muka, total_bayar, status_pembayaran) 
    VALUES('".$pdata["KODE"]."', '".$pdata["NAMA"]."', '".$pdata["ALAMAT"]."', '".$pdata["CEKIN"]."', '".$pdata["CEKOUT"]."', '".$pdata["DP"]."', '".$pdata["TOTAL"]."', '".$pdata["STATUS"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE pesanan_kamarhotel SET
        kode_pesanan = '".$pdata["KODE2"]."',
        nama = '".$pdata["NAMA"]."',
        alamat = '".$pdata["ALAMAT"]."',
        check_in = '".$pdata["CEKIN"]."',
        check_out = '".$pdata["CEKOUT"]."',
        uang_muka = '".$pdata["DP"]."',
        total_bayar = '".$pdata["TOTAL"]."',
        status_pembayaran = '".$pdata["STATUS"]."'
        WHERE kode_pesanan = '".$pdata["KODE1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sql);
    return $hsl;
}

function displaydata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM pesanan_kamarhotel;";
    $hsl = mysqli_query($con,$sql);
    $hsl1 = "";
    $no = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$no.'</td>
        <td class="text-center">'.$h["kode_pesanan"].'</td>
        <td class="text-center">'.$h["nama"].'</td>
        <td class="text-center">'.$h["alamat"].'</td>
        <td class="text-center">'.$h["check_in"].'</td>
        <td class="text-center">'.$h["check_out"].'</td>
        <td class="text-center">'.$h["uang_muka"].'</td>
        <td class="text-center">'.$h["total_bayar"].'</td>
        <td class="text-center">'.$h["status_pembayaran"].'</td>
        <td class = "text-center">
            <a class="btn btn-success px-3 fw-bold" href="edit.php?kode='.$h["kode_pesanan"].'">
            Edit
            </a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["kode_pesanan"].'" onClick=\'return confirm("Data ini akan dihapus, Lanjutkan?");\'>
            Hapus
            </a>
        </td>
    </tr>';
    $no++;
    }
    return $hsl1;
}