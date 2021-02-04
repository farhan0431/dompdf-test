<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
        font-family: 'Poppins', sans-serif;
         vertical-align: top;
         }
        .card {
            border: 1px solid black;
            background-image: url("./background.jpg") repeat 0 0;;
            background-size: cover;
            height: 204px;
            width: 323px;
            position: relative;
        }
        .logo {
            position: absolute;
            height: 35px;
            top: 15px;
            left: 15px;
        }
        .title {
            font-size: 9px;
            position: absolute;
            top: 12px;
            left: 50px;
        }
        .organization {
            font-size: 9px;
            position: absolute;
            top: 20px;
            left: 50px;
            font-weight: 500;
        }
        .date {
            position: absolute;
            font-size: 7px;
            top: 100px;
            left: 25px;
            font-weight: 500;
        }
        .number {
            position: absolute;
            font-size: 15px;
            top: 103px;
            left: 25px;
            font-weight: 500;
        }
        .name {
            position: absolute;
            font-size: 10px;
            top: 125px;
            left: 25px;
            font-weight: 450;
        }
        .address,.address2 {
            position: absolute;
            font-size: 6px;
            top: 140px;
            left: 25px;
            letter-spacing: .3px;
            word-spacing: .5px;
        }
        .address2 {
            top: 147px;
        }
        .barcode {
            position: absolute;
            height: 75px;
            top: 110px;
            left: 220px;
            border-radius: 3px;
            box-shadow: 0 0 3px 1px rgba(0,0,0,.2);
        }
        .info {
            font-size: 5px;
            position: absolute;
            top: 170px;
            right: 22px;
            font-weight: 50;
        }
        
    </style>
</head>
<body>
    <div class="card">
        <img src="./logo-sidenreng.png" alt="" class="logo">
        <h4 class="title">PEMERINTAHAN KABUPATEN SIDENRENG RAPPANG</h4>
        <p class="organization">BADAN PENDAPATAN DAERAH</p>
        <p class="date">20/06/2020</p>
        <h1 class="number">1.14.001.001.0001</h1>
        <h2 class="name">FARHAN</h2>
        <p class="address">Jalan Sapuli No 19F RT.003 RW.005</p>
        <p class="address2">Tallo, Kota Makassar, Sulawesi Selatan</p>
        <img src="./barcode.jpg" alt="" class="barcode">
        <p class="info">Kartu Nomor Pokok Wajib Pajak Daerah</p>
    </div>
</body>
</html>
<?php 

$html = ob_get_clean(); 
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf(); 
$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render(); 
$dompdf->stream(); 
?>