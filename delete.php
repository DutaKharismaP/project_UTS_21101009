<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["kode"])){
        $sql = "DELETE FROM pesanan_kamarhotel WHERE kode_pesanan = '".$_GET["kode"]."'";
        $hsl = mysqli_query($con, $sql);
    }
    mysqli_close($con);
    header("location: tampildata.php");