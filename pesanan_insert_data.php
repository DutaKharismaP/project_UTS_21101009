<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["KODE"] = $_POST["txKODE"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["ALAMAT"] = $_POST["txALAMAT"];
    $pdata["CEKIN"] = $_POST["txCEKIN"];
    $pdata["CEKOUT"] = $_POST["txCEKOUT"];
    $pdata["DP"] = $_POST["txDP"];
    $pdata["TOTAL"] = $_POST["txTOTAL"];
    $pdata["STATUS"] = $_POST["txSTATUS"];

    include_once("fungsi.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1 class="fw-bold my-4">Insert Data Tabel Pesanan Kamar Hotel</h1>
        <form action="" method="POST">
            KODE PESANAN
            <div>
                <input type="text" name="txKODE" class="form-control form-control-sm  w-25">
            </div>
            NAMA
            <div>
                <input type="text" name="txNAMA" class="form-control form-control-sm w-25">
            </div>
            ALAMAT
            <div>
                <input type="text" name="txALAMAT" class="form-control form-control-sm w-25">
            </div>
            CHECK IN
            <div>
                <input type="date" name="txCEKIN" class="form-control form-control-sm w-25">
            </div>
            CHECK OUT
            <div>
                <input type="date" name="txCEKOUT" class="form-control form-control-sm w-25">
            </div>
            UANG MUKA
            <div>
                <input type="text" name="txDP" class="form-control form-control-sm w-25">
            </div>
            TOTAL BAYAR
            <div>
                <input type="text" name="txTOTAL" class="form-control form-control-sm w-25">
            </div>
            STATUS PEMBAYARAN
            <div>
                <select name="txSTATUS" class="form-select form-select-sm w-25">
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUM LUNAS">Belum Lunas</option>
                </select>  
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-success" name="txSIMPAN">INSERT</button>
            </div>
        </form>
    </div>
</body>
</html>