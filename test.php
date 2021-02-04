<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body {
            font-family: Roboto, system-ui, sans-serif;
        }

        h1, h2, h3, h4, h5, h6, p {
            margin: 5px;
        }

        p {
            font-size: 15px;
        }

        span {
            font-weight: bold;
        }

        .title {
            border-bottom: 1px solid #2c3e50;
            padding-bottom: 5px;
        }

        .content table.table-header {
            width: 100%;
            border-bottom-style: double;
            border-bottom-color: #2c3e50;
            margin-bottom: 25px;
        }

        .content table.table-header tr:nth-child(2) th {
            width: 49%;
            float: left;
            text-align: left;
        }

        .content table.table-header tr td {
            width: 50%;
        }

        .content table.table-header tr:nth-child(1) {
            text-align: left;
        }

        
        


        .logo {
            width: 55px;
        }

        .info-location h4, .info-location p {
            text-align: right;
        }


        .info-data{
            width: 100%;
            padding-bottom: 40px;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(127, 140, 141,1);

        }


        

        .info-data div.col-1{
            width: 49.5%;
            float: left;
        }

        .info-data div.col-2  {
            width: 49.5%;
            float: right;
        }

        .data-pajak {
            margin-bottom: 20px;
        }

        .info-data table {
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }

        .info-data table tr th, .info-data table tr td {
            padding: 10px 15px;
        }


        .info-data table tr:nth-child(1) {
            border-top: 2px solid black;
        }

        
        .info-data table tr {
            border-bottom: 2px solid black;
        }



        .info-data table tr th {
            font-size: 13px;
        }

        .info-data table tr td {
            font-size: 12px;
        }

        .objek-pajak h4 {
            padding-bottom: 5px;
        }

        .info-data:nth-child(3) .col-2:nth-child(3) p{
            margin-top: 30px;
            text-align: right;
        } 

        .info-data:nth-child(3) .col-2:nth-child(3) h4 {
            margin: 5px;
            text-align: right;
        }

        .footer p {
            font-size: 10px;
        }

        .payment-info {
            width: 100%;
        }
        .payment-info h4 {
            text-align: right !important;
            margin-right:50px;
        }
        

        
    
    </style>
</head>
<body>
    <div class="content">
        <table class="table-header">
            <tr>
                <th colspan="2">
                    <h4 class="title">Tagihan Pembayaran [123132309482934]</h4>
                    
                </th>
            </tr>
            <tr>
                <td>
                    <img class="logo" src="./logo-sidenreng.png" alt="">
                </td>
                <td class="info-location">
                    <h4>PEMERINTAH KABUPATEN SIDENRENG RAPPANG BADAN PAJAK DAN RETRIBUSI DAERAH</h4>
                    <p>Jl. Tulis Alamat Disini</p>
                </td>
            </tr>
        </table>
        <div class="info-data clearfix">
            <table>
                <tr>
                    <td>
                        <div class="data-pajak">
                            <h4> Data Wajib Pajak  </h4>
                            <h5> Nama Disini </h5>
                            <p> Alamat Disini </p>
                        </div>
                        <div class="data-pajak-online">
                            <h4> Data Wajib Pajak Online</h4>
                            <h5> Nama Disini </h5>
                            <p> Alamat Disini </p>
                            <p> Kelurahan <span>PETOJO</span> </p>
                            <p> Kecamatan <span>PETOJO</span> </p>
                        </div>
                    </td>
                    <td>

                        <div class="objek-pajak">
                        <h4> Data Objek Pajak</h4>
                                <h4>Nomor Objek Pajak</h4>
                                <h4> 0912.112903.123 </h4>
                                <h4>Masa Pajak</h4>
                                <p>April</p>
                                <h4>Tahun Pajak</h4>
                                <p>2019</p>
                                <h4>No Ketetapan</h4>
                                <p>2019123819812012</p>
                                <h4>Nama Objek Pajak</h4>
                                <h4>AFI KOS asdasdasd asd asd</h4>
                                <h4>Alamat Objek Pajak</h4>
                                <p>Alamat Disini</p>
                    </div>
                    
                    </td>
                </tr>
            </table>

            <div class="col-2">
                
            </div>
        </div>
        <div class="info-data clearfix">
            <div class="col-1">
                <table>
                    <tr>
                        <th>Kode Bayar</th>
                        <th> 0912.112903.123 </th>
                    </tr>
                    <tr>
                        <th>Kanal Pembayaran</th>
                        <td>ATM</td>
                    </tr>
                    <tr>
                        <th>Nama Bank</th>
                        <td>Bank Mandiri</td>
                    </tr>
                    <tr>
                        <th colspan="2" style="color: rgba(192, 57, 43,1.0)">Kode bayar ini hanya berlaku selama 14 Hari terhitung sejak tanggal Kode Bayar dibuat</th>
                    </tr>
                </table>
            </div>
            <div class="col-2">
                <table>
                    <tr>
                        <th>Nilai Pokok</th>
                        <th> 0 </th>
                    </tr>
                    <tr>
                        <th>Nilai Bunga</th>
                        <td>5000</td>
                    </tr>
                    <tr>
                        <th>Nilai Denda</th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Niai Sanksi</th>
                        <td>0</td>
                    </tr>
                </table>
            </div>
            <div class="payment-info">
                <p>Tanggal Buat Kode Bayar : <span> 08 Agustus 2020 </span></p>
                <h4>Total</h4>
                <h4>Rp. 4000</h4>
            </div>
        </div>
        <div class="footer">
            <h4>Cara Bayar</h4>
            <p>Masukkan Kartu ATM Mandiri Pada ATM Mandiri dan masukkan nomor PIN anda</p>
            <p>Pilih Menu BAYAR/BELI</p>
            <p>Pilih Menu LAINNYA</p>
            <p>Pilih Menu PENERIMAAN NEGARA</p>
            <p>Pilih Menu LAINNYA</p>
            <p>Masukkan KODE PERUSAHAAN/INSTITUSI = 50020 Kemudian Pilih Menu BENAR</p>
            <p>Masukkan KODE BAYAR kemudian Pilih Menu BENAR</p>
            <p>Masukkan KODE DAERAH = 31 kemudian Pilih Menu BENAR</p>
            <p>Akan muncul informasi kewajiban Pajak anda, jika sesuai maka masukkan nomor urut lalu Pilih Menu YA, jika tidak Pilih Menu TIDAK</p>
            <p>Transaksi Selesai, simpan bukti Transaksi</p>
        </div>
        
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