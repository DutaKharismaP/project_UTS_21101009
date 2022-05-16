<?php
    include("fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        .container{
            margin-top: 4rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div>
                <h3 class="mb-4 fw-bold text-center">Data Pesanan Kamar Hotel</h3>
            </div>
        </div>        
        <div>
            <table class="table align-middle py-5">
                <thead class="table-warning border-1">
                    <tr class="text-center border-2">
                        <th class = "py-4">NO</th>
                        <th class = "py-4">Kode Pesanan</th>
                        <th class = "py-4">Nama</th>
                        <th class = "py-4">Alamat</th>
                        <th class = "py-4">Check In</th>
                        <th class = "py-4">Check Out</th>
                        <th class = "py-4">Uang Muka</th>
                        <th class = "py-4">Total Bayar</th>
                        <th class = "py-4">Status</th>
                        <th class= "py-2" colspan="2"><a href='pesanan_insert_data.php'><input class="btn btn-primary py-2 my-2 px-4 fw-bold" type="button" value="TAMBAH DATA"></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?=displaydata();?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>