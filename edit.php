<?php

    if(isset($_GET["kode"])){
        include_once("koneksi2.php");
        $kode = $_GET["kode"];
        $sql = "SELECT * FROM pesanan_kamarhotel WHERE kode_pesanan='".$kode."';";
        $hsl = mysqli_query($con, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["KODE1"] = $_POST["txKODELAMA"];
        $pdata["KODE2"] = $_POST["txKODE"];
        $pdata["NAMA"] = $_POST["txNAMA"];
        $pdata["ALAMAT"] = $_POST["txALAMAT"];
        $pdata["CEKIN"] = $_POST["txCEKIN"];
        $pdata["CEKOUT"] = $_POST["txCEKOUT"];
        $pdata["DP"]= $_POST["txDP"];
        $pdata["TOTAL"] = $_POST["txTOTAL"];
        $pdata["STATUS"]= $_POST["txSTATUS"];

        include_once("fungsi.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <h1 class="fw-bold my-4">Edit Data Tabel Pesanan Kamar Hotel</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txKODELAMA" value="<?=$h['kode_pesanan'];?>">
            KODE PESANAN
            <div>
                 <input type="text" class="form-control form-control-sm w-25" name="txKODE" value="<?=$h['kode_pesanan'];?>">
            </div>        
            NAMA
            <div>
                <input type="text" class="form-control form-control-sm w-25" name="txNAMA" value="<?=$h["nama"];?>">
            </div>
            ALAMAT
            <div>
                <input type="text" class="form-control form-control-sm w-25" name="txALAMAT" value="<?=$h["alamat"];?>">
            </div>
            CHECK IN
            <div>
                <input type="text" class="form-control form-control-sm w-25" name="txCEKIN" value="<?=$h["check_in"];?>">
            </div>
            CHECK OUT
            <div>
                <input type="text" class="form-control form-control-sm w-25" name="txCEKOUT" value="<?=$h["check_out"];?>">
            </div>
            UANG MUKA
            <div>
                <input type="text" class="form-control form-control-sm w-25" name="txDP" value="<?=$h["uang_muka"];?>">
            </div>
            TOTAL BAYAR
            <div>
                <input type="text" class="form-control form-control-sm w-25"  name="txTOTAL" value="<?=$h["total_bayar"];?>">
            </div>
            STATUS PEMBAYARAN
            <div>
                <select name="txSTATUS" class="form-select form-select-sm w-25">
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUM LUNAS">Belum Lunas</option>
                </select>  
            </div>
            <br>
            <a href="tampildata.php" class="btn btn-danger me-1">Back</a>
            <button type="submit" class="save btn btn-success" name="txSIMPAN">Save</button>       
        </form>
    </div>
</body>
</html>
